<?php
ob_start(); // Start output buffering
include('header.php');
include('sidemenu.php');
?>

  <div class="container-fluid">
    <div class="row" style="min-height: 1000px;">

       <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap aling-items-center pt-3 pb-2 mb-3">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">

                </div>
            </div>
        </div>

        <h2>Create Product</h2>
        <div class="table-responsive">
             <div class="mx-auto container">

                 <div class="mx-auto container">
                    <form id="create-form" enctype="multipart/form-data" method="POST" action="create_product.php">
                        <p style="color: red;"><?php if(isset($_GET['error'])){ echo $_GET['error'];} ?></p>
                        <div class="form-group mt-2">
                            <label>Title</label>
                            <input type="text" class="form-control" id="product-name" name="name" placeholder="Title" required/>
                        </div>

                        <div class="form-group mt-2">
                            <label>Description</label>
                            <input type="text" class="form-control" id="product-desc" name="description" placeholder="Description" required/>
                        </div>

                        <div class="form-group mt-2">
                            <label>Price</label>
                            <input type="text" class="form-control" id="product-price" name="price" placeholder="Price" required/>
                        </div>

                        <div class="form-group mt-2">
                            <label>Special Offer/Sale</label>
                            <input type="number" class="form-control" id="product-offer" name="offer" placeholder="Sale%" required/>
                        </div>

                        <div class="form-group mt-2">
                            <label>Category</label>
                            <select class="form-select" requred name="category">
                                <option value="Bags">Bags</option>
                                <option value="shoes">Shoes</option>
                                <option value="watch">Watches</option>
                                <option value="coat">Clothes</option>
                            </select>
                        </div>

                        <div class="form-group mt-2">
                            <label>Color</label>
                            <input type="text" class="form-control" id="product-color" name="color" placeholder="Color" required/>
                        </div>

                        <div class="form-group mt-2">
                            <label>Image 1</label>
                            <input type="file" class="form-control" id="image1" name="image1" placeholder="Image 1" required/>
                        </div>

                        <div class="form-group mt-2">
                            <label>Image 2</label>
                            <input type="file" class="form-control" id="image2" name="image2" placeholder="Image 2" required/>
                        </div>

                        <div class="form-group mt-2">
                            <label>Image 3</label>
                            <input type="file" class="form-control" id="image3" name="image3" placeholder="Image 3" required/>
                        </div>

                        <div class="form-group mt-2">
                            <label>Image 4</label>
                            <input type="file" class="form-control" id="image4" name="image4" placeholder="Image 4" required/>
                        </div>

                        <div class="form-group mt-3">
                            <input type="submit" class="btn btn-primary" name="create_product" value="Create"/>
                        </div>
                    </form>
                 </div>

             </div>
        </div>

       </main>
     
</div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>