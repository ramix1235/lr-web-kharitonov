<?php    
    require_once("config.php");
    require_once("Paginator.class.php");
    $host = "127.0.0.1";
    $dbname = "blog_db";
    $user = "ramix1235";
    $pass = "";
    $conn = new mysqli($host, $user, $pass, $dbname);
    $limit = (isset($_GET['limit'])) ? $_GET['limit'] : 5;
    $page = (isset($_GET['page'] ))? $_GET['page'] : 1;
    $links = (isset($_GET['links'])) ? $_GET['links'] : 7;
    $query = "SELECT author, date, content FROM publication";
    $Paginator = new Paginator( $conn, $query );
    $results = $Paginator->getData( $limit, $page );
?>

<div class="container">
    <div class="col-md-10 col-md-offset-1">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Author</th>
                <th>Date</th>
                <th>Content</th>
           </tr>
        </thead>
        <tbody>
            <?php for( $i = 0; $i < count( $results->data ); $i++ ) : ?>
                <tr>
                    <td><?php echo $results->data[$i]['author'];?></td>
                    <td><?php echo $results->data[$i]['date'];?></td>
                    <td><?php echo $results->data[$i]['content'];?></td>
                </tr>
            <?php endfor;?>
        </tbody>
    </table>
    <?php echo $Paginator->createLinks( $links, 'pagination pagination-sm' ); ?> 
    </div>
</div>


<!--<?php-->
<!--$host = "127.0.0.1";-->
<!--$dbname = "blog_db";-->
<!--$user = "ramix1235";-->
<!--$pass = "";-->
<!--try {-->
<!--    $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);  -->
<!--}  -->
<!-- catch(PDOException $e) {  -->
<!--    echo $e->getMessage();  -->
<!--}-->
<!--$STH = $DBH->query('SELECT author, date, content from publication');  -->
<!--$STH->setFetchMode(PDO::FETCH_ASSOC);-->
<!--while($row = $STH->fetch()) {  -->
<!--    echo $row['author'] . "<br/>";  -->
<!--    echo $row['date'] . "<br/>";  -->
<!--    echo $row['content'] . "<br/>";-->
<!--    echo "<br/>";  -->
<!--    }-->
<!--$DBH = null;-->
<!--?>-->