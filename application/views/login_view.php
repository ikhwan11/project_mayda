 <!-- ======= Contact Section ======= -->
 <section class="breadcrumbs">
 </section><!-- End Contact Section -->

 <!-- ======= Contact Section ======= -->
 <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
     <div class="container">
         <h1>Login</h1>
         <span class="m2"><?php echo $this->session->flashdata('pesan') ?></span>

         <div class="row">

             <div class="col-lg-6">
                 <!-- login -->

                 <form action="<?= base_url('/auth/login'); ?>" method="post">

                     <div class="form-group">
                         <label>Username:</label>
                         <input type="text" name="username" class="form-control" id="username" placeholder="tulis disini.." autofocus autocomplete="off">
                         <?php echo form_error('username', '<div class="text-danger text-small">', '</div>') ?>

                     </div>
                     <div class="form-group">
                         <label>Password:</label>
                         <input type="password" class="form-control" name="password" id="password" placeholder="tulis disini.." />
                         <?php echo form_error('password', '<div class="text-danger text-small">', '</div>') ?>
                     </div>

                     <button type="submit" class="btn btn-info">Login</button>

                 </form>
                 <!-- login -->

             </div>


         </div>

     </div>
 </section><!-- End Contact Section -->