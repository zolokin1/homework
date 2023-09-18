<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUX VENTUS</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Ubuntu:ital,wght@0,500;0,700;1,300&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   
    <?php require "variables.php" ?>
  </head>
  <body>
        <!-- header-->


        <div class="header">
            <!-- logo  -->
            <div class="logo">
              <a href="./index.php">  <img src="assets/logo.png" alt="logo"></a>
            </div>

            <!-- navigation  -->
            <div class="navigation">
                <?php
                for ( $i=0; $i < sizeof($headerNav); $i++ ) {
                    echo 
                    '<a href="#"> ' .$headerNav[$i]. ' </a>' ;
                }
                ?>

                <a href="#"> 
                    <p class="header-button">
                        Contact Us
                    </p>
                </a>
                <img src="assets/search.png" alt="">
            </div>
         </div>

    <main>
        
        <div class="container-large">
            
            <!--first section-->
             
             <section class="first-section">
                <div class="container-large">
                    <div class="first-section-content">
                        <p class="title-small">LUX VENTUS MAGAZINE</p>
                            <div class="titles">
                                <h1 class="main-title">We Are The </h1>
                                <h1 class="main-title2">Ventus Fashion</h1>
                            </div>   
                        <p class="description">We like to gossip about everything, but we'll never forget the daily fashion dose.</p>
                    </div>
                </div>
            </section>

            <!--second section-->

            <section class="second-section" id= "secBlock"  > 
                <h2 class="secondary-title">
                    Topics
                </h2>
                <div class="second-section-container-small">
                    <div class="second-section-cards"> 
                        <?php
                        
                        foreach($secBlocks as $secBlock) { 
                            echo '<div class="second-section-card">
                                    <img src=" ' .$secBlock['image'] . '" alt="1">
                                    <h3 class="one">' . $secBlock['title']. ' </h3>
                                    <a href="#" class="button2"> ' . $secBlock['text']. '</a>
                                </div>';
                        }
                        ?>
                    </div>
                </div>
            </section>

            <section class="third-section-line" >
                <div class="long-line">
                </div>
            </section>
        </div>


        <div class="container-small">
            
            <!--Third Section-->
            
            <section class="third-section">
                <div class="third-section-card-image">
                    <div class="third-section-card-image-text">
                        <a href="#">FASHION</a>
                    </div>
                </div>
                <div class="third-sec-card-comment-header ">
                    <div class="third-sec-card-header-logo">
                        <img  src="./assets/Mask group (6).png" alt="pic">
                        <p class="third-sec-first-name">
                            Mallory Reyn
                        </p>
                        <div class="third-section-date">
                            <p>
                                April 14th, 2023
                            </p>
                        </div>
                        <div class="comming-inhot">
                            <p>
                                COMING IN HOT!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="third-sec-card-whole-text">
                    <div class="third-sec-text">
                        <h3 id="third-sec-text-title">
                            The Latest Trends from the Moon Fashion Week.
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. 
                            Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae 
                            mattis tellus. Nullam quis imperdiet augue. Vestibulum.
                        </p>
                    </div>
                    <div class="read-more0">
                        <p class="arrow">
                            &#x2192 
                        </p>
                        <a href="#">READ MORE</a>
                            
                        
                    </div>
                </div>   
            </section>
        
            <!-- fourth section-->

            <section class="fourth-section">
                <h2 class="fourth-secondary-title">
                    Trending
                </h2>
                <div class="trending">
                    <?php for($i=0;$i < sizeof($fourthSecBlocks); $i++) {  
                        echo '
                        <div class="trending-cards">
                            <div class="trending-card" id=' . $fourthSecBlocks[$i]['backgroundImage']. '>
                                <div class="card-image-text">
                                <a href="#"> ' . $fourthSecBlocks[$i]['miniTitle']. ' </a>
                                    
                                </div>    
                            </div>
                            <div class="card-comment">
                                <div class="trending-card-comment-header ">
                                    <div class="header-text-logo">
                                        <img  src="./assets/Mask group (6).png" alt="pic">
                                        <p class="first-name">
                                            Mallory Reyn
                                        </p>
                                    </div>
                                    <div class="date">
                                        <p>
                                            April 14th, 2023
                                        </p>
                                    </div>    
                                </div>
                                <h3 class="trending-sec-comment-title">' . $fourthSecBlocks[$i]['cardTextTitle']. '</h3>
                                <div class="trending-sec-comment-text">' . $fourthSecBlocks[$i]['cardText']. '</div>
                                <div class="read-more">
                                    <p class="arrow">
                                        &#x2192
                                    </p>
                                    <a href="#">READ MORE</a>
                                </div>
                            </div>
                        </div> ';
                    }
                    ?>
                </div>
            </section>   
           
            <!-- last section-->

            <section class="last-section">
                <div class="cards">
                    <?php for( $i=0; $i < sizeof($lastSecBlocks); $i++ ) {  
                        echo 
                        '<div class="card-container">
                            <div class="last-sec-card-image" id=' . $lastSecBlocks[$i]['backgroundImage']. '>
                                <div class="last-sec-card-image-text">
                                <p> ' . $lastSecBlocks[$i]['miniTitle']. '</p>
                                </div>    
                            </div>
                            <div class="card-comment">
                                <div class="trending-card-comment-header ">
                                    <div class="header-text-logo">
                                        <img  src="' . $lastSecBlocks[$i]['image']. '" alt="pic">
                                        <p class="first-name">
                                                Mallory Reyn
                                        </p>
                                     </div>
                                    <div class="date">
                                        <p>
                                        April 14th, 2023
                                        </p>
                                    </div>    
                                </div>
                                <h3 >' . $lastSecBlocks[$i]['cardTextTitle']. ' </h3>
                                <p class="card-comment-text">' . $lastSecBlocks[$i]['cardText']. ' </p>
                                <div class="read-more1">
                                    <p class="arrow">
                                        &#x2192
                                    <a href="#">READ MORE</a>                           
                                </div>
                            </div>
                        </div>';
                    }
                    ?> 
                </div> 
            </section>
        </div>
    </main>

     <!--footer-->

    <footer>
        <div class="footer-section">
            <div class="footer">
                <img class="footer-logo" src="./assets/Component 1.png" alt="logo">
                <div class="footer-text-nav">
                    <div class="footer-text">
                        <p>
                            Let’s Hang Out
                        </p>
                    </div>
                    <div class="footer-nav-links">
                    <?php
                    for ( $i=0; $i < sizeof($footernavicons); $i++ ) {
                        echo '
                        <img src="' .$footernavicons[$i]. '" alt="" a href="#" >
                        ';
                    }
                    ?>
                    </div>
                </div>
            </div>
            <div class="footer-line-container">
                <div class="footer-long-line">
            </div>
                <div class="footer-last-text">
                    © 2023 - Lux Ventus by Zine.E.Falouti
                </div>
            </div>
        </div>
    </footer>
    
</body>
</html>