<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat Breeds - Purrfect Breeds</title>
    <meta name="description" content="Discover detailed information about various cat breeds on Purrfect Breeds. Explore their origins, personalities, unique traits, and fun facts to find your perfect feline companion.">
    <meta name="keywords" content="cat breeds, feline breeds, cat origins, cat personality, unique cat traits, fun cat facts, Purrfect Breeds">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #faf2dd;
            color: #333;
            box-sizing: border-box;
        }

        nav {
            background-color: #FFAFAF;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
            box-sizing: border-box;
        }

        .logo img {
            height: 40px;
            width: auto;
            display: block;
        }

        .nav-links {
            display: flex;
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
            padding: 14px 20px;
            font-weight: 600;
        }

        .nav-links a:hover {
            background-color: #fce4e4;
            color: #333;
            border-radius: 5px;
        }

        .breed-section {
            display: flex;
            align-items: flex-start;
            margin: 80px 20px;
            padding: 20px;
            border-bottom: 1px solid #ddd;
        }

        .breed-image img {
            width: 240px; /* Reduced width */
            height: 300px; /* Reduced height */
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .breed-info {
            margin-left: 20px;
            flex: 1; /* Allow text area to take up the remaining space */
        }

        .breed-info h2 {
            margin-top: 0;
            color: #FF6F6F;
        }

        footer {
            background-color: #FFAFAF;
            color: #333;
            padding: 15px;
            text-align: center;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        footer p {
            margin: 5px 0;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <nav>
        <a href="index.html" class="logo">
            <img src="{{ asset('images/logo.jpg') }}" alt="My Logo">
        </a>
        <div class="nav-links">
            <a href="index.html">Home</a>
            <a href="about.html">About Me</a>
            <a href="content.html">Cat Breeds</a>
        </div>
    </nav>

    <!-- Example of a breed section -->
    <section class="breed-section">
        <div class="breed-image">
            <img src="{{ asset('images/Maine Coon.jpg') }}" alt="Maine Coon">
        </div>
        <div class="breed-info">
            <h2>Maine Coon</h2>
            <p><strong>Origination:</strong> The Maine Coon originated in the United States, specifically in Maine. It’s one of the oldest natural breeds in North America.</p>
            <p><strong>Personality:</strong> Affectionate, intelligent, and gentle. They are sociable and great with families, enjoying time with their owners.</p>
            <p><strong>Health and Wellness:</strong> Prone to hip dysplasia and hypertrophic cardiomyopathy, requiring regular vet check-ups.</p>
            <p><strong>Unique Traits & Fun Facts:</strong>
                <ul>
                    <li>Known as “gentle giants.”</li>
                    <li>Their tufted ears resemble those of a lynx.</li>
                    <li>They have semi-waterproof fur.</li>
                </ul>
            </p>
        </div>
    </section>

    <section class="breed-section">
        <div class="breed-image">
            <img src="{{ asset('images/Siamese.jpg') }}" alt="Siamese">
        </div>
        <div class="breed-info">
            <h2>Siamese</h2>
            <p><strong>Origination:</strong> The Siamese cat originated in Thailand, previously known as Siam. It’s one of the oldest and most recognizable breeds in the world.</p>
            <p><strong>Personality:</strong> Vocal, social, and affectionate. Siamese cats are known for their strong bond with their owners and love to communicate.</p>
            <p><strong>Health and Wellness:</strong> Prone to respiratory issues and dental problems, so regular dental care is essential.</p>
            <p><strong>Unique Traits & Fun Facts:</strong>
                <ul>
                    <li>Known for their striking blue eyes.</li>
                    <li>They are highly vocal and enjoy "talking" to their owners.</li>
                    <li>Siamese cats have a sleek, slender build.</li>
                </ul>
            </p>
        </div>
    </section>

    <section class="breed-section">
        <div class="breed-image">
            <img src="{{ asset('images/Persian.jpg') }}" alt="Persian">
        </div>
        <div class="breed-info">
            <h2>Persian</h2>
            <p><strong>Origination:</strong> The Persian cat originated in Persia (modern-day Iran). It was introduced to Europe in the 1600s and became a favorite among royalty.</p>
            <p><strong>Personality:</strong> Calm, gentle, and affectionate. They prefer a serene environment and are very loving towards their owners but reserved around strangers.</p>
            <p><strong>Health and Wellness:</strong> Prone to respiratory issues due to their flat faces; regular grooming is essential to maintain their long fur.</p>
            <p><strong>Unique Traits & Fun Facts:</strong>
                <ul>
                    <li>Known for their luxurious, long coat.</li>
                    <li>Their flat, round face gives them a doll-like appearance.</li>
                    <li>They have low energy and prefer lounging over playing. </li>
                </ul>
            </p>
        </div>
    </section>

    <section class="breed-section">
        <div class="breed-image">
            <img src="{{ asset('images/Bengal.jpg') }}" alt="Bengal">
        </div>
        <div class="breed-info">
            <h2>Bengal</h2>
            <p><strong>Origination:</strong> The Bengal cat is a hybrid breed, originating from a cross between domestic cats and the Asian leopard cat.</p>
            <p><strong>Personality:</strong> Active, playful, and curious. Bengals are highly energetic and love to climb and explore their surroundings.</p>
            <p><strong>Health and Wellness:</strong> Generally healthy, but may be prone to heart disease and hip dysplasia.</p>
            <p><strong>Unique Traits & Fun Facts:</strong>
                <ul>
                    <li>They have a wild, leopard-like appearance.</li>
                    <li>Bengals are known for their striking, spotted or marbled coat.</li>
                    <li>They enjoy playing in water.</li>
                </ul>
            </p>
        </div>
    </section>

    <section class="breed-section">
        <div class="breed-image">
            <img src="{{ asset('images/Ragdoll.jpg') }}" alt="Ragdoll">
        </div>
        <div class="breed-info">
            <h2>Ragdoll</h2>
            <p><strong>Origination:</strong> The Ragdoll cat originated in the United States in the 1960s, bred for its docile and placid temperament.</p>
            <p><strong>Personality:</strong> Calm, affectionate, and easygoing. Ragdolls are known for their tendency to go limp when picked up, hence the name.</p>
            <p><strong>Health and Wellness:</strong> Prone to hypertrophic cardiomyopathy; regular vet visits are important.</p>
            <p><strong>Unique Traits & Fun Facts:</strong>
                <ul>
                    <li>Ragdolls are known for their striking blue eyes.</li>
                    <li>They have a semi-long coat that’s soft and silky.</li>
                    <li>Ragdolls are often described as “puppy-like” due to their tendency to follow their owners around.</li>
                </ul>
            </p>
        </div>
    </section>

    <section class="breed-section">
        <div class="breed-image">
            <img src="{{ asset('images/.jpg') }}" alt="">
        </div>
        <div class="breed-info">
            <h2></h2>
            <p><strong>Origination:</strong> </p>
            <p><strong>Personality:</strong> </p>
            <p><strong>Health and Wellness:</strong> </p>
            <p><strong>Unique Traits & Fun Facts:</strong>
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </p>
        </div>
    </section>

    <section class="breed-section">
        <div class="breed-image">
            <img src="{{ asset('images/.jpg') }}" alt="">
        </div>
        <div class="breed-info">
            <h2></h2>
            <p><strong>Origination:</strong> </p>
            <p><strong>Personality:</strong> </p>
            <p><strong>Health and Wellness:</strong> </p>
            <p><strong>Unique Traits & Fun Facts:</strong>
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </p>
        </div>
    </section>

    <section class="breed-section">
        <div class="breed-image">
            <img src="{{ asset('images/.jpg') }}" alt="">
        </div>
        <div class="breed-info">
            <h2></h2>
            <p><strong>Origination:</strong> </p>
            <p><strong>Personality:</strong> </p>
            <p><strong>Health and Wellness:</strong> </p>
            <p><strong>Unique Traits & Fun Facts:</strong>
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </p>
        </div>
    </section>

    <section class="breed-section">
        <div class="breed-image">
            <img src="{{ asset('images/.jpg') }}" alt="">
        </div>
        <div class="breed-info">
            <h2></h2>
            <p><strong>Origination:</strong> </p>
            <p><strong>Personality:</strong> </p>
            <p><strong>Health and Wellness:</strong> </p>
            <p><strong>Unique Traits & Fun Facts:</strong>
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </p>
        </div>
    </section>

    <section class="breed-section">
        <div class="breed-image">
            <img src="{{ asset('images/.jpg') }}" alt="">
        </div>
        <div class="breed-info">
            <h2></h2>
            <p><strong>Origination:</strong> </p>
            <p><strong>Personality:</strong> </p>
            <p><strong>Health and Wellness:</strong> </p>
            <p><strong>Unique Traits & Fun Facts:</strong>
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </p>
        </div>
    </section>

    <section class="breed-section">
        <div class="breed-image">
            <img src="{{ asset('images/.jpg') }}" alt="">
        </div>
        <div class="breed-info">
            <h2></h2>
            <p><strong>Origination:</strong> </p>
            <p><strong>Personality:</strong> </p>
            <p><strong>Health and Wellness:</strong> </p>
            <p><strong>Unique Traits & Fun Facts:</strong>
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </p>
        </div>
    </section>

    <section class="breed-section">
        <div class="breed-image">
            <img src="{{ asset('images/.jpg') }}" alt="">
        </div>
        <div class="breed-info">
            <h2></h2>
            <p><strong>Origination:</strong> </p>
            <p><strong>Personality:</strong> </p>
            <p><strong>Health and Wellness:</strong> </p>
            <p><strong>Unique Traits & Fun Facts:</strong>
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </p>
        </div>
    </section>

    <!-- Repeat the breed section for each breed -->

    <footer>
        <p>&copy; 2024 Purrfect Breeds. All rights reserved.</p>
    </footer>
</body>
</html>
