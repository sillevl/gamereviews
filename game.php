<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>GameReviews</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.1/foundation.min.css" media="screen" title="no title" charset="utf-8">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js" charset="utf-8"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.1/foundation.min.js" charset="utf-8"></script>
        <script src="js/gamereviews.js" charset="utf-8"></script>
    </head>
    <body>
        <div class="top-bar">
            <div class="row">
              <div class="top-bar-left">
                <ul class="dropdown menu" data-dropdown-menu>
                  <li class="menu-text"><a href="index.php">Game Reviews</a></li>
                  <li><a href="#">One</a></li>
                  <li><a href="#">Two</a></li>
                  <li><a href="#">Three</a></li>
                </ul>
              </div>
          </div>
        </div>
        <div class="row">
            <h2>Game details</h2>
            <dl class="">
                <dt>Name</dt>
                <dd>Game a</dd>
                <dt>Description</dt>
                <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</dd>
                <dt>Price</dt>
                <dd>€23.25</dd>
                <dt>Platform</dt>
                <dd>XBOX, PC</dd>
                <dt>Multiplayer</dt>
                <dd>NO</dd>
                <dt>Publisher</dt>
                <dd>SuperGames</dd>
            </dl>
            <p>
                Game added by user abc on 05 may 2016 8:36
            </p>

            <h3>Reviews</h3>
            <table>
                <tr>
                    <th>User</th>
                    <th>Score</th>
                    <th>Review</th>
                </tr>
                <tr>
                    <td>xyz</td>
                    <td>5/10</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
                </tr>
                <tr>
                    <td>xyz</td>
                    <td>5/10</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
                </tr>
                <tr>
                    <td>xyz</td>
                    <td>5/10</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
                </tr>
                <tr>
                    <td>xyz</td>
                    <td>5/10</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
                </tr>
                <tr>
                    <td>xyz</td>
                    <td>5/10</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
                </tr>
            </table>

            <h3>Add review</h3>
            <form class="" method="post" action="addreview.php">
                <input type="hidden" name="userid" value="1">
                <input type="hidden" name="gameid" value="35">
                <label for="score">Score:</label>
                <input type="text" name="score" id="score" value="">
                <label for="review">Review:</label>
                <textarea name="review" rows="8" cols="40" id="review"></textarea>
                <input type="submit" name="submit" value="Send" class="button">
            </form>
        </div>
    </body>
</html>
