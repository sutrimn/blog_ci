    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <h2>Ini tes about</h2>
                <p>
                <?php foreach ($about->result() as $key);?>
                    <?php echo $key->isi;?>
                </p>
            </div>
        </div>
    </div>