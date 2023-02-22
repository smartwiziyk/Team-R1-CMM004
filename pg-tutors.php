<?php
include_once 'page-header.php';         
?>

<body>
    <!--Start of Container-->
    <div class="container">
    <?php
                    if (isset($_SESSION["userdata"])){
                        echo "<p id='welcome'> We welcome you  " . $_SESSION["userdata"] . "  (Course Tutor) to our Teams - Tutor web application!</p>";
                    }
                    ?>
        <h1 style="color:darkgreen">View our Catalogue of Gardening Services - Book us now!!!</h1> 
        <main class="col-md-12">
            <div id="experimentContainer" class="row">
                <article class="col-md-3">
                    <div class="panel">
                        <div class="panel-heading bg-success">
                            <h3 class="panel-title">Garden Clearance</h3>
                            <img src="assets/images/Garden clearance.jpe" alt="Placeholder Image" id="experimentImage">
                    
                        </div>
                        <div class="panel-body">
                            <p style="color:black">For whatever garden waste disposal or garden clean up tasks you want, we have
                                uniformed workers available at your convenience. To make room for you to once again enjoy your
                                yard, we can assist you clean away any clutter. our garden clearance and trash removal services are
                                less expensive than skip rentals, and you won't have to worry about finding room.<br><h4 style="color:brown">Call us for booking on - 07359886643</h4></p> 
                        </div> 
                    </div>

                    <div class="panel">
                        <div class="panel-heading bg-success">
                            <h3 class="panel-title">Hedge Trimming and Pruning</h3>
                            <img src="assets/images/triming.jpe" alt="Placeholder Image" id="experimentImage">
                    
                        </div>
                        <div class="panel-body">
                            <p>Big or small we provide an excellent hedge
                            trimming service. Our professional gardener can create beautifully shaped
                            hedges which will add a lot of fashionable and uniquely styled natural green
                            fences all around your garden.<br> <h4 style="color:brown">Call us for booking on - 07359886643</h4></p> 
                        </div> 
                    </div>

                    <div class="panel">
                        <div class="panel-heading bg-success">
                            <h3 class="panel-title">Soil fertilization</h3>
                            <img src="assets/images/soil.jpe" alt="Placeholder Image" id="experimentImage">
                    
                        </div>
                        <div class="panel-body">
                            <p>Focusing on soil fertility, our goal is to assist Farmers and Growers in identifying any
                                soil or crop issues through thorough soil fertility audits and then to offer guidance on how to address
                                any issues. <br> <h4 style="color:brown">Call us for booking on - 07359886643</h4></p> 
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
                            <p>We improve and maintain lawns using the highest quality
                            of technology and deliver exceptional services in a warm and friendly manner.
                            We provide a healthy outdoor space everyone can be proud of. <br> <h4 style="color:brown">Call us for booking on - 07359886643</h4></p> 
                        </div> 
                    </div>

                    <div class="panel">
                        <div class="panel-heading bg-success">
                            <h3 class="panel-title">Removal of Weeds and Weed prevention</h3>
                            <img src="assets/images/weeding.jpe" alt="Placeholder Image" id="experimentImage">
                    
                        </div>
                        <div class="panel-body">
                            <p>These includes weed control, prevention, removal and
                            maintenance. As one of the leading weed control specialists, we offer a
                            comprehensive range of commercial weed control services, including aquatic,
                            grass, moss and algae, and Japanese knotweed removal.<br> <h4 style="color:brown">Call us for booking on - 07359886643</h4></p> 
                        </div> 
                    </div>

                    <div class="panel">
                        <div class="panel-heading bg-success">
                            <h3 class="panel-title">Planting and seeding new trees and plants</h3>
                            <img src="assets/images/planting.jpe" alt="Placeholder Image" id="experimentImage">
                    
                        </div>
                        <div class="panel-body">
                            <p>We have completed many successful planting and
                            seeding projects have left us with a variety of tools, tricks, and skills. We have a
                            diverse array of equipment for handling any kind of seeding or planting
                            projects, including seed collection. Don't be afraid to challenge us with your
                            ideas.<br> <h4 style="color:brown">Call us for booking on - 07359886643</h4></p> 
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
                            <p>No matter how tiny your garden or vegetable plot is, you'll
                                need to keep pests and illnesses under control to ensure the health of your plants. We provide
                                remedies for ants, grubs, slugs, flies, wasps, greenhouse bugs, fungus, mildew, and other pests and
                                diseases. We also include rodent management in this area, which includes a variety of methods for
                                keeping mice and rats under control in your house or garden.<br> <h4 style="color:brown">Call us for booking on - 07359886643</h4></p> 
                        </div> 
                    </div>

                    <div class="panel">
                        <div class="panel-heading bg-success">
                            <h3 class="panel-title">General garden maintenance</h3>
                            <img src="assets/images/general.jpe" alt="Placeholder Image" id="experimentImage">
                    
                        </div>
                        <div class="panel-body">
                            <p>We can relieve your stress by managing your outside space and
                                keeping it looking beautiful all year long. We offer maintenance services like; Clearance and
                                removal of leaves, Caring and maintaining flowerbeds and shrubs, weed killing,
                                Jet washing/deep cleaning and maintenance of paving stones, driveways,
                                walkways and decking.<br> <h4 style="color:brown">Call us for booking on - 07359886643</h4></p> 
                        </div> 
                    </div>

                    <div class="panel">
                        <div class="panel-heading bg-success">
                            <h3 class="panel-title">Installation of artificial lawns and Play grounds</h3>
                            <img src="assets/images/artificial.jpe" alt="Placeholder Image" id="experimentImage">
                    
                        </div>
                        <div class="panel-body">
                            <p>We provide your home, school and recreational centers with the best artificial 
                                turf installations to give your lawns top class view. Children can feel safe to
                                play on the well padded playgrounds designed by our team of experts.  <br> <h4 style="color:brown">Call us for booking on - 07359886643</h4></p> 
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
                            <p>Building and maintaining patios, fencing, decks, water features, and paving walls,
                                Cutting the grass, weeding, pruning, and trimming the hedges are all offered as part of a dedicated
                                garden maintenance service. We strive with our clients to ensure that all of their needs are
                                addressed while providing a warm, professional service. <br> <h4 style="color:brown">Call us for booking on - 07359886643</h4></p> 
                        </div> 
                    </div>

                    <div class="panel">
                        <div class="panel-heading bg-success">
                            <h3 class="panel-title">Gardening accessories, equipment and tools</h3>
                            <img src="assets/images/Garden3.jpe" alt="Placeholder Image" id="experimentImage">
                    
                        </div>
                        <div class="panel-body">
                            <p> Our hand-picked assortment of gardening tools and
                                equipment gives you cutting-edge, high-quality goods. From trowels and spades to powered leaf
                                blowers and hedge cutters, greenhouses and raised beds to hose reels and water butts, and much
                                more, you can find it all here<br> <h4 style="color:brown">Call us for booking on - 07359886643</h4></p> 
                        </div> 
                    </div>

                    <div class="panel">
                        <div class="panel-heading bg-success">
                            <h3 class="panel-title">General Gardening Advice</h3>
                            <img src="assets/images/advice.jpe" alt="Placeholder Image" id="experimentImage">
                    
                        </div>
                        <div class="panel-body">
                            <p>Don't forget to reach out to us for your best gardening solutions. 
                                Our team of experts are always available to assist you. We are here to 
                                give you the satisfaction you deserve.<br> <h4 style="color:brown">Call us for booking on - 07359886643</h4></p> 
                        </div> 
                    </div>
                </article>
            </div>
        </main>
    </div>
    <!--End of Container-->
</body>
            <?php
include_once 'page-footer.php';
?>