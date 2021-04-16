<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="jumbotron">
            <h1>Hello, <?= $this->session->userdata('nama'); ?></h1>
            <p><?= date('D, d-m-Y'); ?></p>
        </div>
    </section>