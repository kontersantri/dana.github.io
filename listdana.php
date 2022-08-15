
 <!DOCTYPE html>
 <html lang="in">
 <head>
     <meta charset="UTF-8">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
     <title>Judul halaman</title>
 </head>
 <body>
     <!-- FILE PHP -->
     <?php
     $nomor = $_GET["nomor"];
     
     ?>
     <!-- END PHP -->
     <!-- AWAL FORM -->     
     <div class="container mt-3">
         <form methode="get">
             <div class="row">
                 <div class="col">
                     <input class="form-control" type="number" name="nomor" placeholder="nomor dana" value="<?php echo $nomor ?>" required style="box-shadow:none;">
                 </div>
                 <div class="col-4">
                     <button type="submit" class="btn btn-success">Lanjutkan</button>
                 </div>
             </div>
         </form>
     </div>
     <!-- END FORM -->
     <!-- Produk 1 -->
     <div class="container mt-4">
         <a href="https://kontersantri.bukaolshop.site/produk/dana-10-000-1382202/?catatan=<?php echo $nomor ?>" style="text-decoration:none; color=black">
         <div class="card shadow-sm"style="border-radius:10px">
             <div class="row">
                 <div class="col-2">
                    <img src="https://i.ibb.co/h1wstRT/download-1.png" width="50" class="p-2" alt="">
                 </div>
                 <div class="col">
                     <p style="margin-top:8%;">Dana 10.000</p>
                 </div>
                 <div class="col-4">
                   <p style="margin-top:13%;margin-left:22%"><strong>Rp 11.000</strong></p>
                 </div>
             </div>
         </div>
         </a>
     </div>
     <!-- Done -->
     <!-- Produk 2 -->
     <div class="container mt-2">
         <a href="https://kontersantri.bukaolshop.site/produk/dana-20-000-1382204/?catatan=<?php echo $nomor ?>" style="text-decoration:none; color=black">
         <div class="card shadow-sm"style="border-radius:10px">
             <div class="row">
                 <div class="col-2">
                    <img src="https://i.ibb.co/h1wstRT/download-1.png" width="50" class="p-2" alt="">
                 </div>
                 <div class="col">
                     <p style="margin-top:8%;">Dana 10.000</p>
                 </div>
                 <div class="col-4">
                   <p style="margin-top:13%;margin-left:22%"><strong>Rp 11.000</strong></p>
                 </div>
             </div>
         </div>
         </a>
     </div>
     <!-- Done -->
 </body>
 </html>
