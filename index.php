<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Theatre</title>

    <!-- css -->
    <link rel="stylesheet" href="css/style.css" />

    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">

</head>

<body>



    <?php include "header.php" ?>


    <!-- Main Section -->
    <main>
        <!-- Banner Section -->
        <section class="banner">
            <video loop src="video/john wick.webm" autoplay muted class="banner_video">
            Your browser does not support the video tag.
            </video>
            <!-- <img src="images/action.jpg" alt=""> -->

            <div class="wrapper video-overlay">
                <!-- <div class="static_txt">
                    This is 
                </div> -->
                <ul class="dynamic_txts">
                    <li><span>LOCAL THEATRE</span></li>
                    <li><span>Get Ready For An</span></li>
                    <li><span>Unforgettable Cinematic Experience</span></li>
                    <li><span>that will leave you</span></li>
                    <li><span> on the edge of your seat</span></li>
                </ul>
            </div>
        </section>
    </main>
    <!-- End of Main Section -->


    <!-- Movie Section -->
    <section class="movies">
        <!-- filter bar -->
        <div class="filter_bar">
            <div class="filter_dropdowns">
                <select name="genre" id="" class="genre">
                    <option value="all genres">All genres</option>
                    <option value="action">Action</option>
                    <option value="adventure">Adventure</option>
                    <option value="animal">Animal</option>
                    <option value="animation">Animation</option>
                    <option value="biography">Biography</option>
                </select>

                <select name="year" id="" class="year">
                    <option value="all genres">All the years</option>
                    <option value="2022">2022</option>
                    <option value="2020-2021">2020-2021</option>
                    <option value="2010-2019">2010-2019</option>
                    <option value="2000-2009">2000-2009</option>
                    <option value="1980-1999">1980-1999</option>
                </select>
            </div>

            <div class="filter_radios">
                <input type="radio" name="grade" id="featured" checked>
                <label for="featured">Featured</label>

                <input type="radio" name="grade" id="popular">
                <label for="popular">Popular</label>

                <input type="radio" name="grade" id="newest">
                <label for="newest">Newest</label>

                <div class="checked_radio_bg"></div>
            </div>
        </div>
    </section>
    <div class="movies_grid">
        <div class="movie_card">
            <div class="card_head">
                <img src="images/adventure.jpg" alt="" class="card_img">

                <div class="card_overlay">
                    <div class="bookmark">
                        <i class="fa-regular fa-bookmark"></i>
                    </div>

                    <div class="rating">
                        <i class="fa-regular fa-star"></i>
                        <span>6.4</span>
                    </div>

                    <div class="play">
                        <i class="fa-regular fa-circle-play"></i>
                    </div>
                </div>
            </div>
            <div class="card_body">
                <h3 class="card_title">Adventure</h3>

                <div class="card_info">
                    <span class="genre">Action/Comedy</span>
                    <span class="year">2021</span>
                </div>
            </div>
        </div>

        <div class="movie_card">
            <div class="card_head">
                <img src="images/action.jpg" alt="" class="card_img">

                <div class="card_overlay">
                    <div class="bookmark">
                        <i class="fa-regular fa-bookmark"></i>
                    </div>

                    <div class="rating">
                        <i class="fa-regular fa-star"></i>
                        <span>6.4</span>
                    </div>

                    <div class="play">
                        <i class="fa-regular fa-circle-play"></i>
                    </div>
                </div>
            </div>
            <div class="card_body">
                <h3 class="card_title">Adventure</h3>

                <div class="card_info">
                    <span class="genre">Action/Comedy</span>
                    <span class="year">2021</span>
                </div>
            </div>
        </div>

        <div class="movie_card">
            <div class="card_head">
                <img src="images/animated.jpg" alt="" class="card_img">

                <div class="card_overlay">
                    <div class="bookmark">
                        <i class="fa-regular fa-bookmark"></i>
                    </div>

                    <div class="rating">
                        <i class="fa-regular fa-star"></i>
                        <span>6.4</span>
                    </div>

                    <div class="play">
                        <i class="fa-regular fa-circle-play"></i>
                    </div>
                </div>
            </div>
            <div class="card_body">
                <h3 class="card_title">Adventure</h3>

                <div class="card_info">
                    <span class="genre">Action/Comedy</span>
                    <span class="year">2021</span>
                </div>
            </div>
        </div>

        <div class="movie_card">
            <div class="card_head">
                <img src="images/bbcamerica.jpg" alt="" class="card_img">

                <div class="card_overlay">
                    <div class="bookmark">
                        <i class="fa-regular fa-bookmark"></i>
                    </div>

                    <div class="rating">
                        <i class="fa-regular fa-star"></i>
                        <span>6.4</span>
                    </div>

                    <div class="play">
                        <i class="fa-regular fa-circle-play"></i>
                    </div>
                </div>
            </div>
            <div class="card_body">
                <h3 class="card_title">Adventure</h3>

                <div class="card_info">
                    <span class="genre">Action/Comedy</span>
                    <span class="year">2021</span>
                </div>
            </div>
        </div>

        <div class="movie_card">
            <div class="card_head">
                <img src="images/comedy.jpg" alt="" class="card_img">

                <div class="card_overlay">
                    <div class="bookmark">
                        <i class="fa-regular fa-bookmark"></i>
                    </div>

                    <div class="rating">
                        <i class="fa-regular fa-star"></i>
                        <span>6.4</span>
                    </div>

                    <div class="play">
                        <i class="fa-regular fa-circle-play"></i>
                    </div>
                </div>
            </div>
            <div class="card_body">
                <h3 class="card_title">Adventure</h3>

                <div class="card_info">
                    <span class="genre">Action/Comedy</span>
                    <span class="year">2021</span>
                </div>
            </div>
        </div>

        <div class="movie_card">
            <div class="card_head">
                <img src="images/crime.jpg" alt="" class="card_img">

                <div class="card_overlay">
                    <div class="bookmark">
                        <i class="fa-regular fa-bookmark"></i>
                    </div>

                    <div class="rating">
                        <i class="fa-regular fa-star"></i>
                        <span>6.4</span>
                    </div>

                    <div class="play">
                        <i class="fa-regular fa-circle-play"></i>
                    </div>
                </div>
            </div>
            <div class="card_body">
                <h3 class="card_title">Adventure</h3>

                <div class="card_info">
                    <span class="genre">Action/Comedy</span>
                    <span class="year">2021</span>
                </div>
            </div>
        </div>

        <div class="movie_card">
            <div class="card_head">
                <img src="images/sci-fi.jpg" alt="" class="card_img">

                <div class="card_overlay">
                    <div class="bookmark">
                        <i class="fa-regular fa-bookmark"></i>
                    </div>

                    <div class="rating">
                        <i class="fa-regular fa-star"></i>
                        <span>6.4</span>
                    </div>

                    <div class="play">
                        <i class="fa-regular fa-circle-play"></i>
                    </div>
                </div>
            </div>
            <div class="card_body">
                <h3 class="card_title">Adventure</h3>

                <div class="card_info">
                    <span class="genre">Action/Comedy</span>
                    <span class="year">2021</span>
                </div>
            </div>
        </div>

        <div class="movie_card">
            <div class="card_head">
                <img src="images/horror.jpg" alt="" class="card_img">

                <div class="card_overlay">
                    <div class="bookmark">
                        <i class="fa-regular fa-bookmark"></i>
                    </div>

                    <div class="rating">
                        <i class="fa-regular fa-star"></i>
                        <span>6.4</span>
                    </div>

                    <div class="play">
                        <i class="fa-regular fa-circle-play"></i>
                    </div>
                </div>
            </div>
            <div class="card_body">
                <h3 class="card_title">Adventure</h3>

                <div class="card_info">
                    <span class="genre">Action/Comedy</span>
                    <span class="year">2021</span>
                </div>
            </div>
        </div>

        <div class="movie_card">
            <div class="card_head">
                <img src="images/vikins.jpg" alt="" class="card_img">

                <div class="card_overlay">
                    <div class="bookmark">
                        <i class="fa-regular fa-bookmark"></i>
                    </div>

                    <div class="rating">
                        <i class="fa-regular fa-star"></i>
                        <span>6.4</span>
                    </div>

                    <div class="play">
                        <i class="fa-regular fa-circle-play"></i>
                    </div>
                </div>
            </div>
            <div class="card_body">
                <h3 class="card_title">Adventure</h3>

                <div class="card_info">
                    <span class="genre">Action/Comedy</span>
                    <span class="year">2021</span>
                </div>
            </div>
        </div>

        <div class="movie_card">
            <div class="card_head">
                <img src="images/planet.jpg" alt="" class="card_img">

                <div class="card_overlay">
                    <div class="bookmark">
                        <i class="fa-regular fa-bookmark"></i>
                    </div>

                    <div class="rating">
                        <i class="fa-regular fa-star"></i>
                        <span>6.4</span>
                    </div>

                    <div class="play">
                        <i class="fa-regular fa-circle-play"></i>
                    </div>
                </div>
            </div>
            <div class="card_body">
                <h3 class="card_title">Adventure</h3>

                <div class="card_info">
                    <span class="genre">Action/Comedy</span>
                    <span class="year">2021</span>
                </div>
            </div>
        </div>

        <div class="movie_card">
            <div class="card_head">
                <img src="images/spider-man-no-way-home.jpg" alt="" class="card_img">

                <div class="card_overlay">
                    <div class="bookmark">
                        <i class="fa-regular fa-bookmark"></i>
                    </div>

                    <div class="rating">
                        <i class="fa-regular fa-star"></i>
                        <span>6.4</span>
                    </div>

                    <div class="play">
                        <i class="fa-regular fa-circle-play"></i>
                    </div>
                </div>
            </div>
            <div class="card_body">
                <h3 class="card_title">Adventure</h3>

                <div class="card_info">
                    <span class="genre">Action/Comedy</span>
                    <span class="year">2021</span>
                </div>
            </div>
        </div>

        <div class="movie_card">
            <div class="card_head">
                <img src="images/John-Wick-3.jpg" alt="" class="card_img">

                <div class="card_overlay">
                    <div class="bookmark">
                        <i class="fa-regular fa-bookmark"></i>
                    </div>

                    <div class="rating">
                        <i class="fa-regular fa-star"></i>
                        <span>6.4</span>
                    </div>

                    <div class="play">
                        <i class="fa-regular fa-circle-play"></i>
                    </div>
                </div>
            </div>
            <div class="card_body">
                <h3 class="card_title">Adventure</h3>

                <div class="card_info">
                    <span class="genre">Action/Comedy</span>
                    <span class="year">2021</span>
                </div>
            </div>
        </div>

        <div class="movie_card">
            <div class="card_head">
                <img src="images/got.jpg" alt="" class="card_img">

                <div class="card_overlay">
                    <div class="bookmark">
                        <i class="fa-regular fa-bookmark"></i>
                    </div>

                    <div class="rating">
                        <i class="fa-regular fa-star"></i>
                        <span>6.4</span>
                    </div>

                    <div class="play">
                        <i class="fa-regular fa-circle-play"></i>
                    </div>
                </div>
            </div>
            <div class="card_body">
                <h3 class="card_title">Adventure</h3>

                <div class="card_info">
                    <span class="genre">Action/Comedy</span>
                    <span class="year">2021</span>
                </div>
            </div>
        </div>

        <div class="movie_card">
            <div class="card_head">
                <img src="images/funny.jpeg" alt="" class="card_img">

                <div class="card_overlay">
                    <div class="bookmark">
                        <i class="fa-regular fa-bookmark"></i>
                    </div>

                    <div class="rating">
                        <i class="fa-regular fa-star"></i>
                        <span>6.4</span>
                    </div>

                    <div class="play">
                        <i class="fa-regular fa-circle-play"></i>
                    </div>
                </div>
            </div>
            <div class="card_body">
                <h3 class="card_title">Adventure</h3>

                <div class="card_info">
                    <span class="genre">Action/Comedy</span>
                    <span class="year">2021</span>
                </div>
            </div>
        </div>

        <div class="movie_card">
            <div class="card_head">
                <img src="images/crime.jpg" alt="" class="card_img">

                <div class="card_overlay">
                    <div class="bookmark">
                        <i class="fa-regular fa-bookmark"></i>
                    </div>

                    <div class="rating">
                        <i class="fa-regular fa-star"></i>
                        <span>6.4</span>
                    </div>

                    <div class="play">
                        <i class="fa-regular fa-circle-play"></i>
                    </div>
                </div>
            </div>
            <div class="card_body">
                <h3 class="card_title">Adventure</h3>

                <div class="card_info">
                    <span class="genre">Action/Comedy</span>
                    <span class="year">2021</span>
                </div>
            </div>
        </div>

        <div class="movie_card">
            <div class="card_head">
                <img src="images/spider-man-no-way-home.jpg" alt="" class="card_img">

                <div class="card_overlay">
                    <div class="bookmark">
                        <i class="fa-regular fa-bookmark"></i>
                    </div>

                    <div class="rating">
                        <i class="fa-regular fa-star"></i>
                        <span>6.4</span>
                    </div>

                    <div class="play">
                        <i class="fa-regular fa-circle-play"></i>
                    </div>
                </div>
            </div>
            <div class="card_body">
                <h3 class="card_title">Adventure</h3>

                <div class="card_info">
                    <span class="genre">Action/Comedy</span>
                    <span class="year">2021</span>
                </div>
            </div>

            
        </div>
    </div>

    <!-- load more button -->
    <button class="load_more">LOAD MORE</button>

    <!-- category section -->
    <section class="category" id="category">
        <h2 class="section_heading_category">Category</h2>
        <div class="category_grid">
            <div class="category_card">
                <img src="./images/action.jpg" alt="" class="card_img">
                <div class="name">Action</div>
                <div class="total">100</div>
            </div>

            <div class="category_card">
                <img src="./images/animated.jpg" alt="" class="card_img">
                <div class="name">Animation</div>
                <div class="total">80</div>
            </div>

            <div class="category_card">
                <img src="./images/funny.jpeg" alt="" class="card_img">
                <div class="name">Comedy</div>
                <div class="total">90</div>
            </div>

            <div class="category_card">
                <img src="./images/horror.jpg" alt="" class="card_img">
                <div class="name">Horror</div>
                <div class="total">100</div>
            </div>

            <div class="category_card">
                <img src="./images/sci-fi.jpg" alt="" class="card_img">
                <div class="name">Sci-Fi</div>
                <div class="total">100</div>
            </div>

            <div class="category_card">
                <img src="./images/thriller.webp" alt="" class="card_img">
                <div class="name">Thriller</div>
                <div class="total">100</div>
            </div>

            <div class="category_card">
                <img src="./images/action.jpg" alt="" class="card_img">
                <div class="name">Action</div>
                <div class="total">100</div>
            </div>

            <div class="category_card">
                <img src="./images/action.jpg" alt="" class="card_img">
                <div class="name">Action</div>
                <div class="total">100</div>
            </div>

            <div class="category_card">
                <img src="./images/action.jpg" alt="" class="card_img">
                <div class="name">Action</div>
                <div class="total">100</div>
            </div>

            <div class="category_card">
                <img src="./images/action.jpg" alt="" class="card_img">
                <div class="name">Action</div>
                <div class="total">100</div>
            </div>

            <div class="category_card">
                <img src="./images/action.jpg" alt="" class="card_img">
                <div class="name">Action</div>
                <div class="total">100</div>
            </div>

            
        </div>
    </section>

    <!-- footer section  -->
    
    
    <?php include "footer.php" ?>

<script >
    // animation
// Get all the movie card elements
const movieCards = document.querySelectorAll(".movie_card");

// Add event listener for scroll
window.addEventListener("scroll", () => {
  // Loop through each movie card
  movieCards.forEach(movieCard => {
    // Get the position and height of the card
    const cardPosition = movieCard.offsetTop;
    const cardHeight = movieCard.offsetHeight;
    
    // Calculate the bottom of the card
    const cardBottom = cardPosition + cardHeight;
    
    // Calculate the bottom of the viewport
    const viewportBottom = window.scrollY + window.innerHeight;
    
    // Check if the bottom of the card is within the viewport
    if (cardBottom < viewportBottom) {
      // Add the fade-in animation class to the movie_card
      movieCard.classList.add("movie_card_animate");
    }
  });

   const loadMoreButton = document.querySelector(".load_more");

function checkScroll() {
  let movieCards = document.querySelectorAll(".movie_card");
  let lastMovieCard = movieCards[movieCards.length - 1];
  let lastMovieCardOffset = lastMovieCard.offsetTop + lastMovieCard.clientHeight;
  let pageOffset = window.pageYOffset + window.innerHeight;
  if (pageOffset > lastMovieCardOffset - 100) {
    setTimeout(function() {
      loadMoreButton.classList.add("load_more_animate");
    }, 1000);
  }
}

window.addEventListener("scroll", checkScroll);

const cards = document.querySelectorAll('.category_card');
const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      const img = entry.target.querySelector('.card_img');
      img.classList.add('flip');
      observer.unobserve(entry.target);
    }
  });
});
cards.forEach((card) => observer.observe(card));



});



</script>



</body>

</html>