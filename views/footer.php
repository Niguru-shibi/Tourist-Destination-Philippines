<!--footer-->
<?php
include 'connect_db.php';
//album query
$footer_sql = "SELECT * FROM footer_tb";
$footer_query = mysqli_query($conn, $footer_sql);
$footer = mysqli_fetch_all($footer_query);
//print_r($footer);
?>
    <section class="team-hero">
        <div class="container">
             <div class="row justify-content-center text-center">
                <div class="col-lg-4">
                    <!--<svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>-->
                    <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="<?= $footer[0][2] ?>" style="border: 2px solid white;">
                    <h2><?= $footer[0][3] ?></h2>
                    <p><?= $footer[0][4] ?></p>
                    <p><?= $footer[0][5] ?></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <!--<svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>-->
                    <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="<?= $footer[1][2] ?>" style="border: 2px solid white;">
                    <h2><?= $footer[1][3] ?></h2>
                    <p><?= $footer[1][4] ?></p>
                    <p><?= $footer[1][5] ?></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <!--<svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>-->
                    <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="<?= $footer[2][2] ?>" style="border: 2px solid white;">
                    <h2><?= $footer[2][3] ?></h2>
                    <p><?= $footer[2][4] ?></p>
                    <p><?= $footer[2][5] ?></p>
                </div><!-- /.col-lg-4 -->
                     
            </div>
        </div>
    </section>
    <footer class="container">
            <img class="funbanner" src="../images/funbanner1.jpg" alt="fun" >
			<p>© 2025 It's more fun in the PHILIPPINES!</p> <p class="float-right"><a href="#">Back to top</a></p>
	</footer>

                    

               

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

