<style>
    .vastu-bg{
    /* background-image: url(assets/img/about-bg.png); */
     background-image: url(<?=base_url('uploads/vasthu/').$image;?>); 
    background-size: cover;
    height: 100%;
    padding: 130px 50px 15px;
    background-position: 100% 100%;
    /* margin-top: -150px; */
}
.vastu-bg h3 {
    color: #fff;
    float: right;
    font-family: 'Lato', sans-serif;
    font-style: italic;
    font-size: 35px;
    margin-top: 50px;
}
.vastu-bg .link {
    font-family: 'Lato', sans-serif;
    color: #969090;
    font-style: italic;
    font-weight: bold;
    font-size: 16px;
}
.vastu-bg .link a {
    color: #969090;
}
    </style>


<div class="container-fluid">
<div class="row vastu-bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-12 pull-right">
                    <h3>Vastu</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 link">
        <a href="<?= site_url() ?>">Home</a> &gt; Vastu
    </div>
</div>
</div>
<br>

<div class="container">
    <div class="row">
        <div class="box box-primary">
            <div class="box-header">
                <h2><?= $title ?></h2>
                <hr />
            </div>
            <div class="box-body">
                <?= $content ?>
            </div>
            <br />
        </div>
    </div>
</div>