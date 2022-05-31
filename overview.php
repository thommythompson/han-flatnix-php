<!DOCTYPE html>
<html lang="en">
<head>
    <title>Flatnix - Overview</title>
    <?php
        include 'html/head.php';
    ?>
</head>
<body>
    <?php
        include 'html/navbar.php';
    ?>
    <div class="padding-10vw">
        <h1>Movie overview</h1>
        
            <form>
                <div class="flex-row stretch-content filter-menu">
                    <select name="genre" id="genre">
                        <option value="" default>-- Genre --</option>
                        <option value="action">Action</option>
                        <option value="crime">Crime</option>
                        <option value="drama">Drama</option>
                    </select>
                    <select name="genre" id="genre">
                        <option value="" default>-- Year --</option>
                        <option value="action">2008</option>
                    </select>
                    <select name="genre" id="genre">
                        <option value="" default>-- Director --</option>
                        <option value="action">Christopher Nolan</option>
                    </select>
                    <input type="text" placeholder="Search">
                    <button>Search</button>
                </div>
            </form>
        <table>
            <tr>
                <th></th>
                <th>Title</th>
                <th>Duration</th>
                <th>Genre</th>
                <th>Director</th>
                <th>Year</th>
            </tr>
            <tr>
                <td>
                    <a href="details.php">
                        <img src="img/poster_dark_knight.jpg">
                    </a>
                </td>
                <td>
                    <a href="details.php">
                        <p>Dark Knight</p>
                    </a>
                </td>
                <td>02:32:00</td>
                <td>Action, Crime, Drama</td>
                <td>Christopher Nolan</td>
                <td>2008</td>
            </tr>
            <tr>
                <td>
                    <a href="details.php">
                        <img src="img/poster_goodfellas.jpg">
                    </a>
                </td>
                <td>
                    <a href="details.php">
                        <p>Dark Knight</p>
                    </a>
                </td>
                <td>02:32:00</td>
                <td>Action, Crime, Drama</td>
                <td>Christopher Nolan</td>
                <td>2008</td>
            </tr>
            <tr>
                <td>
                    <a href="details.php">
                        <img src="img/poster_inception.jpg">
                    </a>
                </td>
                <td>
                    <a href="details.php">
                        <p>Dark Knight</p>
                    </a>
                </td>
                <td>02:32:00</td>
                <td>Action, Crime, Drama</td>
                <td>Christopher Nolan</td>
                <td>2008</td>
            </tr>
            <tr>
                <td>
                    <a href="details.php">
                        <img src="img/poster_matrix.jpg">
                    </a>
                </td>
                <td>
                    <a href="details.php">
                        <p>Dark Knight</p>
                    </a>
                </td>
                <td>02:32:00</td>
                <td>Action, Crime, Drama</td>
                <td>Christopher Nolan</td>
                <td>2008</td>
            </tr>
            <tr>
                <td>
                    <a href="details.php">
                        <img src="img/poster_saving_private_ryan.jpg">
                    </a>
                </td>
                <td>
                    <a href="details.php">
                        <p>Dark Knight</p>
                    </a>
                </td>
                <td>02:32:00</td>
                <td>Action, Crime, Drama</td>
                <td>Christopher Nolan</td>
                <td>2008</td>
            </tr>
            <tr>
                <td>
                    <a href="details.php">
                        <img src="img/poster_dark_knight.jpg">
                    </a>
                </td>
                <td>
                    <a href="details.php">
                        <p>Dark Knight</p>
                    </a>
                </td>
                <td>02:32:00</td>
                <td>Action, Crime, Drama</td>
                <td>Christopher Nolan</td>
                <td>2008</td>
            </tr>
            <tr>
                <td>
                    <a href="details.php">
                        <img src="img/poster_goodfellas.jpg">
                    </a>
                </td>
                <td>
                    <a href="details.php">
                        <p>Dark Knight</p>
                    </a>
                </td>
                <td>02:32:00</td>
                <td>Action, Crime, Drama</td>
                <td>Christopher Nolan</td>
                <td>2008</td>
            </tr>
            <tr>
                <td>
                    <a href="details.php">
                        <img src="img/poster_inception.jpg">
                    </a>
                </td>
                <td>
                    <a href="details.php">
                        <p>Dark Knight</p>
                    </a>
                </td>
                <td>02:32:00</td>
                <td>Action, Crime, Drama</td>
                <td>Christopher Nolan</td>
                <td>2008</td>
            </tr>
            <tr>
                <td>
                    <a href="details.php">
                        <img src="img/poster_matrix.jpg">
                    </a>
                </td>
                <td>
                    <a href="details.php">
                        <p>Dark Knight</p>
                    </a>
                </td>
                <td>02:32:00</td>
                <td>Action, Crime, Drama</td>
                <td>Christopher Nolan</td>
                <td>2008</td>
            </tr>
            <tr>
                <td>
                    <a href="details.php">
                        <img src="img/poster_saving_private_ryan.jpg">
                    </a>
                </td>
                <td>
                    <a href="details.php">
                        <p>Dark Knight</p>
                    </a>
                </td>
                <td>02:32:00</td>
                <td>Action, Crime, Drama</td>
                <td>Christopher Nolan</td>
                <td>2008</td>
            </tr>
        </table>
    </div>
    <?php
        include 'html/footer.php';
    ?>
</body>
</html>