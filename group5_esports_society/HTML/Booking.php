<?php
    session_start();
    if(isset($_SESSION['user_id'])&&isset($_SESSION['user_name'])){
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ticket Booking</title>

    <link rel="stylesheet" href="../CSS/Booking.css">
    <style type="text/css">

      a{
        color: white;
      }

    </style>
</head>
<body>
 <h1>STAGE</h1>
  </div>
    
  </div>
  <form action="user.php" method="post">
  <ol class="cabin fuselage">
    <li class="row row--1">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="1A" name="seat[]" data-name="1A"/>
          <label for="1A">1A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="1B" />
          <label for="1B">1B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="1C" />
          <label for="1C">1C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="1D" />
          <label for="1D">1D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="1E" />
          <label for="1E">1E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="1F" />
          <label for="1F">1F</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="1G" />
          <label for="1G">1G</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="1H" />
          <label for="1H">1H</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="1I" />
          <label for="1I">1I</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="1J" />
          <label for="1J">1J</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="1K" />
          <label for="1K">1K</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="1L" />
          <label for="1L">1L</label>
        </li>
      </ol>
    </li>
    <li class="row row--2">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="2A" name="seat[]" data-name="Front Row"/>
          <label for="2A">2A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2B" name="seat[]" data-name="Front Row"/>
          <label for="2B">2B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2C" name="seat[]" data-name="Front Row"/>
          <label for="2C">2C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2D" name="seat[]" data-name="Front Row"/>
          <label for="2D">2D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2E" name="seat[]" data-name="Front Row" />
          <label for="2E">2E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2F" name="seat[]" data-name="Front Row"/>
          <label for="2F">2F</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2G" name="seat[]" data-name="Front Row"/>
          <label for="2G">2G</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2H" name="seat[]" data-name="Front Row"/>
          <label for="2H">2H</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2I" name="seat[]" data-name="Front Row"/>
          <label for="2I">2I</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2J" name="seat[]" data-name="Front Row"/>
          <label for="2J">2J</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2K" name="seat[]" data-name="Front Row"/>
          <label for="2K">2K</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2L" name="seat[]" data-name="Front Row"/>
          <label for="2L">2L</label>
        </li>
      </ol>
    </li>
    <li class="row row--3">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="3A" />
          <label for="3A">3A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3B" />
          <label for="3B">3B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3C" />
          <label for="3C">3C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3D" />
          <label for="3D">3D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3E" />
          <label for="3E">3E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3F" />
          <label for="3F">3F</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3G" />
          <label for="3G">3G</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3H" />
          <label for="3H">3H</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3I" />
          <label for="3I">3I</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3J" />
          <label for="3J">3J</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3K" />
          <label for="3K">3K</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3L" />
          <label for="3L">3L</label>
        </li>
      </ol>
    </li>
    <li class="row row--4">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="4A" />
          <label for="4A">4A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4B" />
          <label for="4B">4B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4C" />
          <label for="4C">4C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4D" />
          <label for="4D">4D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4E" />
          <label for="4E">4E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4F" />
          <label for="4F">4F</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4G" />
          <label for="4G">4G</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4H" />
          <label for="4H">4H</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4I" />
          <label for="4I">4I</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4J" />
          <label for="4J">4J</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4K" />
          <label for="4K">4K</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4L" />
          <label for="4FL">4L</label>
        </li>
      </ol>
    </li>
    <li class="row row--5">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="5A" />
          <label for="5A">5A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5B" />
          <label for="5B">5B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5C" />
          <label for="5C">5C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5D" />
          <label for="5D">5D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5E" />
          <label for="5E">5E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5F" />
          <label for="5F">5F</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5G" />
          <label for="5G">5G</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5H" />
          <label for="5H">5H</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5I" />
          <label for="5I">5I</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5J" />
          <label for="5J">5J</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5K" />
          <label for="5K">5K</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5L" />
          <label for="5L">5L</label>
        </li>
      </ol>
    </li>
    <li class="row row--6">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="6A" />
          <label for="6A">6A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="6B" />
          <label for="6B">6B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="6C" />
          <label for="6C">6C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="6D" />
          <label for="6D">6D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="6E" />
          <label for="6E">6E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="6F" />
          <label for="6F">6F</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="6G" />
          <label for="6G">6G</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="6H" />
          <label for="6H">6H</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="6I" />
          <label for="6I">6I</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="6J" />
          <label for="6J">6J</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="6K" />
          <label for="6K">6K</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="6L" />
          <label for="6L">6L</label>
        </li>
      </ol>
    </li>
    <li class="row row--7">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="7A" />
          <label for="7A">7A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="7B" />
          <label for="7B">7B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="7C" />
          <label for="7C">7C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="7D" />
          <label for="7D">7D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="7E" />
          <label for="7E">7E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="7F" />
          <label for="7F">7F</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="7G" />
          <label for="7G">7G</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="7H" />
          <label for="7H">7H</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="7I" />
          <label for="7I">7I</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="7J" />
          <label for="7J">7J</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="7K" />
          <label for="7K">7K</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="7L" />
          <label for="7L">7L</label>
        </li>
      </ol>
    </li>
    <li class="row row--8">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="8A" />
          <label for="8A">8A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="8B" />
          <label for="8B">8B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="8C" />
          <label for="8C">8C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="8D" />
          <label for="8D">8D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="8E" />
          <label for="8E">8E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="8F" />
          <label for="8F">8F</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="8G" />
          <label for="8G">8G</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="8H" />
          <label for="8H">8H</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="8I" />
          <label for="8I">8I</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="8J" />
          <label for="8J">8J</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="8K" />
          <label for="8K">8K</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="8L" />
          <label for="8L">8L</label>
        </li>
      </ol>
    </li>
    <li class="row row--9">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="9A" />
          <label for="9A">9A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="9B" />
          <label for="9B">9B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="9C" />
          <label for="9C">9C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="9D" />
          <label for="9D">9D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="9E" />
          <label for="9E">9E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="9F" />
          <label for="9F">9F</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="9G" />
          <label for="9G">9G</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="9H" />
          <label for="9H">9H</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="9I" />
          <label for="9I">9I</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="9J" />
          <label for="9J">9J</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="9K" />
          <label for="9K">9K</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="9L" />
          <label for="9L">9L</label>
        </li>
      </ol>
    </li>
    <li class="row row--10">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="10A" />
          <label for="10A">10A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="10B" />
          <label for="10B">10B</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="10C" />
          <label for="10C">10C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="10D" />
          <label for="10D">10D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="10E" />
          <label for="10E">10E</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="10F" />
          <label for="10F">10F</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="10G" />
          <label for="10G">10G</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="10H" />
          <label for="10H">10H</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="10I" />
          <label for="10I">10I</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="10J" />
          <label for="10J">10J</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="10K" />
          <label for="1K">10K</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="10L" />
          <label for="10L">10L</label>
        </li>
      </ol>
    </li>
  </ol>
  <p align="center"><a href="Events.php">Back</a></p>
  <input type="hidden" id="selectedSeats" name="selectedSeats" value="">
          <button type="submit">Book</button>
        </div>
  </form>
  </div>
</div>
</body>
</html>
<?php
    }else{
        header("Location: Homepage.php?menu=login");
        exit();
    }

?>