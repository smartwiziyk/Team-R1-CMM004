<?php
include_once 'header.php';         
?>

<body>
    <!--Start of Container-->
    <div class="container">
    <?php
                    if (isset($_SESSION["useruid"])){
                        echo "<p>We welcome you " . $_SESSION["useruid"] . " to our gardening services web application!</p>";
                    }
                    ?>
        <h1 style="color:black">View our Catalogue of Gardening Services - Book us now!!!</h1> 
        <main class="col-md-12">
            <div id="experimentContainer" class="row">
                <article class="col-md-3">
                    <div class="panel">
                        <div class="panel-heading bg-success">
                            <h3 class="panel-title">Garden Clearance</h3>
                            <img src="assets/images/Garden clearance.jpe" alt="Placeholder Image" id="experimentImage">
                    
                        </div>
                        <div class="panel-body">
                            <p style="color:black";>Sunt clabularees prensionem ferox, bi-color lunaes. Ubi est fortis armarium? Peregrinatione sapienter
                                ducuntad dexter equiso.Lotus pulchritudines ducunt ad abactor.Homos trabem in germanus ostravia!</p> 
                        </div> 
                    </div>

                    <div class="panel">
                        <div class="panel-heading bg-success">
                            <h3 class="panel-title">Pruning and Trimming</h3>
                            <img src="assets/images/triming.jpe" alt="Placeholder Image" id="experimentImage">
                    
                        </div>
                        <div class="panel-body">
                            <p>Sunt clabularees prensionem ferox, bi-color lunaes. Ubi est fortis armarium? Peregrinatione sapienter
                                ducuntad dexter equiso.Lotus pulchritudines ducunt ad abactor.Homos trabem in germanus ostravia!</p> 
                        </div> 
                    </div>

                    <div class="panel">
                        <div class="panel-heading bg-success">
                            <h3 class="panel-title">Soil fertilization</h3>
                            <img src="assets/images/soil.jpe" alt="Placeholder Image" id="experimentImage">
                    
                        </div>
                        <div class="panel-body">
                            <p>Sunt clabularees prensionem ferox, bi-color lunaes. Ubi est fortis armarium? Peregrinatione sapienter
                                ducuntad dexter equiso.Lotus pulchritudines ducunt ad abactor.Homos trabem in germanus ostravia!</p> 
                        </div> 
                    </div>
                </article>
                <article class="col-md-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading bg-success">
                            <h3 class="panel-title">Lawn Mowing</h3>
                            <img src="assets/images/lawn mowing.jpe" alt="Placeholder Image" id="experimentImage">
                    
                        </div>
                        <div class="panel-body">
                            <p>Sunt clabularees prensionem ferox, bi-color lunaes. Ubi est fortis armarium? Peregrinatione sapienter
                                ducuntad dexter equiso.Lotus pulchritudines ducunt ad abactor.Homos trabem in germanus ostravia!</p> 
                        </div> 
                    </div>

                    <div class="panel">
                        <div class="panel-heading bg-success">
                            <h3 class="panel-title">Removal of Weeds and Weed prevention</h3>
                            <img src="assets/images/weeding.jpe" alt="Placeholder Image" id="experimentImage">
                    
                        </div>
                        <div class="panel-body">
                            <p>Sunt clabularees prensionem ferox, bi-color lunaes. Ubi est fortis armarium? Peregrinatione sapienter
                                ducuntad dexter equiso.Lotus pulchritudines ducunt ad abactor.Homos trabem in germanus ostravia!</p> 
                        </div> 
                    </div>

                    <div class="panel">
                        <div class="panel-heading bg-success">
                            <h3 class="panel-title">Planting and seeding new trees and plants</h3>
                            <img src="assets/images/planting.jpe" alt="Placeholder Image" id="experimentImage">
                    
                        </div>
                        <div class="panel-body">
                            <p>Sunt clabularees prensionem ferox, bi-color lunaes. Ubi est fortis armarium? Peregrinatione sapienter
                                ducuntad dexter equiso.Lotus pulchritudines ducunt ad abactor.Homos trabem in germanus ostravia!</p> 
                        </div> 
                    </div>
                </article>
                <article class="col-md-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading bg-success">
                            <h3 class="panel-title">Pest and Disease Control</h3>
                            <img src="assets/images/pest and disease.jpe" alt="Placeholder Image" id="experimentImage">
                    
                        </div>
                        <div class="panel-body">
                            <p>Sunt clabularees prensionem ferox, bi-color lunaes. Ubi est fortis armarium? Peregrinatione sapienter
                                ducuntad dexter equiso.Lotus pulchritudines ducunt ad abactor.Homos trabem in germanus ostravia!</p> 
                        </div> 
                    </div>

                    <div class="panel">
                        <div class="panel-heading bg-success">
                            <h3 class="panel-title">General garden maintenance</h3>
                            <img src="assets/images/general.jpe" alt="Placeholder Image" id="experimentImage">
                    
                        </div>
                        <div class="panel-body">
                            <p>Sunt clabularees prensionem ferox, bi-color lunaes. Ubi est fortis armarium? Peregrinatione sapienter
                                ducuntad dexter equiso.Lotus pulchritudines ducunt ad abactor.Homos trabem in germanus ostravia!</p> 
                        </div> 
                    </div>

                    <div class="panel">
                        <div class="panel-heading bg-success">
                            <h3 class="panel-title">Installation of artificial lawns and Play grounds</h3>
                            <img src="assets/images/artificial.jpe" alt="Placeholder Image" id="experimentImage">
                    
                        </div>
                        <div class="panel-body">
                            <p>Sunt clabularees prensionem ferox, bi-color lunaes. Ubi est fortis armarium? Peregrinatione sapienter
                                ducuntad dexter equiso.Lotus pulchritudines ducunt ad abactor.Homos trabem in germanus ostravia!</p> 
                        </div> 
                    </div>
                </article>
                <article class="col-md-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading bg-success">
                            <h3 class="panel-title">Landscaping services</h3>
                            <img src="assets/images/Garden1.jpe" alt="Placeholder Image" id="experimentImage">
                    
                        </div>
                        <div class="panel-body">
                            <p>Sunt clabularees prensionem ferox, bi-color lunaes. Ubi est fortis armarium? Peregrinatione sapienter
                                ducuntad dexter equiso.Lotus pulchritudines ducunt ad abactor.Homos trabem in germanus ostravia!</p> 
                        </div> 
                    </div>

                    <div class="panel">
                        <div class="panel-heading bg-success">
                            <h3 class="panel-title">Gardening accessories, equipment and tools</h3>
                            <img src="assets/images/Garden3.jpe" alt="Placeholder Image" id="experimentImage">
                    
                        </div>
                        <div class="panel-body">
                            <p>Sunt clabularees prensionem ferox, bi-color lunaes. Ubi est fortis armarium? Peregrinatione sapienter
                                ducuntad dexter equiso.Lotus pulchritudines ducunt ad abactor.Homos trabem in germanus ostravia!</p> 
                        </div> 
                    </div>

                    <div class="panel">
                        <div class="panel-heading bg-success">
                            <h3 class="panel-title">General Gardening Advice</h3>
                            <img src="assets/images/advice.jpe" alt="Placeholder Image" id="experimentImage">
                    
                        </div>
                        <div class="panel-body">
                            <p>Sunt clabularees prensionem ferox, bi-color lunaes. Ubi est fortis armarium? Peregrinatione sapienter
                                ducuntad dexter equiso.Lotus pulchritudines ducunt ad abactor.Homos trabem in germanus ostravia!</p> 
                        </div> 
                    </div>
                </article>
            </div>
        </main>
    </div>
    <!--End of Container-->
</body>
            <?php
include_once 'footer.php';
?>