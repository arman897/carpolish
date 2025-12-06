<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ProductListModel;
use App\Models\ProductModel;
use App\Models\ProductContentModel;

class ProductController extends BaseController
{
    protected $productModel;
    protected $productContentModel;

     public function __construct()
    {
        $this->productModel = new ProductListModel();
        $this->productContentModel = new ProductContentModel();
        helper(['form', 'url']);
    }

    /**
     * List all products (only first image shown)
     */
    public function index()
{
    $productModel = new ProductModel();
    $productContentModel = new ProductContentModel();

    $products = $productModel->findAll();

    foreach ($products as &$product) {
        // Fetch all related images/titles/descriptions
        $contents = $productContentModel
            ->where('p_id', $product['p_id'])
            ->orderBy('id', 'ASC')
            ->findAll();

        $product['contents'] = $contents;
        // You can use $contents[0]['p_image'] for "first image only" if needed elsewhere
    }

    return view('admin/product/index', ['prod' => $products]);
}


    /**
     * Show create product form
     */
    public function create()
    {
        return view('admin/product/create');
    }

    /**
     * Store new product with multiple images
     */
    public function store()
    {
        $db = \Config\Database::connect();
        $db->transStart();

        // 1️⃣ Insert product name
        $p_name = $this->request->getPost('p_name');
        $this->productModel->insert(['p_name' => $p_name]);
        $p_id = $this->productModel->getInsertID();

        // 2️⃣ Prepare product upload folder
        $uploadPath = FCPATH . 'public/uploads/products/' . $p_id . '/';
        if (!is_dir($uploadPath)) {
            mkdir($uploadPath, 0777, true);
        }

        // 3️⃣ Handle multiple content items
        $titles = $this->request->getPost('p_title');
        $descriptions = $this->request->getPost('p_description');
        $images = $this->request->getFiles();

        if (!empty($titles)) {
            foreach ($titles as $index => $title) {
                $imageName = null;
                if (isset($images['p_image'][$index]) && $images['p_image'][$index]->isValid()) {
                    $file = $images['p_image'][$index];
                    $imageName = 'img_' . ($index + 1) . '_' . time() . '.' . $file->getExtension();
                    $file->move($uploadPath, $imageName);
                }

                $this->productContentModel->insert([
                    'p_id' => $p_id,
                    'p_image' => 'products/' . $p_id . '/' . $imageName,
                    'p_title' => $title,
                    'p_description' => $descriptions[$index] ?? null,
                ]);
            }
        }

        $db->transComplete();

        if ($db->transStatus() === false) {
            return redirect()->back()->with('error', 'Failed to create product.');
        }

        return redirect()->to(base_url('admin/product'))->with('success', 'Product created successfully.');
    }

    /**
     * Show edit product form
     */
    public function edit($p_id)
    {
        $product = $this->productModel->find($p_id);
        $contents = $this->productContentModel->where('p_id', $p_id)->findAll();

        return view('admin/product/edit', compact('product', 'contents'));
    }

    /**
     * Update product
     */
    public function update($p_id)
{
    $db = \Config\Database::connect();
    $db->transStart();

    // 1️⃣ Update main product name
    $this->productModel->update($p_id, [
        'p_name' => $this->request->getPost('p_name')
    ]);

    // 2️⃣ Fetch content IDs, titles, descriptions
    $content_ids = $this->request->getPost('content_id');
    $titles = $this->request->getPost('p_title');
    $descriptions = $this->request->getPost('p_description');
    $images = $this->request->getFiles();

    // 3️⃣ Prepare upload path
    $uploadPath = FCPATH . 'public/uploads/products/' . $p_id . '/';
    if (!is_dir($uploadPath)) {
        mkdir($uploadPath, 0777, true);
    }

    if (!empty($titles)) {
        foreach ($titles as $index => $title) {
            $imageName = null;
            $newImage = isset($images['p_image'][$index]) && $images['p_image'][$index]->isValid() ? $images['p_image'][$index] : null;

            // If updating existing content row
            if (!empty($content_ids[$index])) {
                $contentRow = $this->productContentModel->find($content_ids[$index]);
                if ($newImage) {
                    $imageName = 'img_' . ($index + 1) . '_' . time() . '.' . $newImage->getExtension();
                    $newImage->move($uploadPath, $imageName);
                    $finalImage = 'products/' . $p_id . '/' . $imageName;
                } else {
                    $finalImage = $contentRow['p_image'] ?? null;
                }
                $this->productContentModel->update($content_ids[$index], [
                    'p_title' => $title,
                    'p_description' => $descriptions[$index] ?? null,
                    'p_image' => $finalImage
                ]);
            } 
            // If adding a new content row (no id)
            else {
                if ($newImage) {
                    $imageName = 'img_' . ($index + 1) . '_' . time() . '.' . $newImage->getExtension();
                    $newImage->move($uploadPath, $imageName);
                    $finalImage = 'products/' . $p_id . '/' . $imageName;
                } else {
                    $finalImage = null;
                }
                $this->productContentModel->insert([
                    'p_id' => $p_id,
                    'p_title' => $title,
                    'p_description' => $descriptions[$index] ?? null,
                    'p_image' => $finalImage
                ]);
            }
        }
    }
    $db->transComplete();

    if ($db->transStatus() === false) {
        return redirect()->back()->with('error', 'Failed to update product.');
    }

    return redirect()->to(base_url('admin/product'))->with('success', 'Product updated successfully.');
}


    
    /**
     * Delete product and its images
     */
    public function delete($p_id)
    {
        $db = \Config\Database::connect();
        $db->transStart();

        $uploadPath = FCPATH . 'public/uploads/products/' . $p_id . '/';
        if (is_dir($uploadPath)) {
            array_map('unlink', glob($uploadPath . '*'));
            rmdir($uploadPath);
        }

        $this->productContentModel->where('p_id', $p_id)->delete();
        $this->productModel->delete($p_id);

        $db->transComplete();

        if ($db->transStatus() === false) {
            return redirect()->back()->with('error', 'Failed to delete product.');
        }

        return redirect()->to(base_url('admin/product'))->with('success', 'Product deleted successfully.');
    }
}
