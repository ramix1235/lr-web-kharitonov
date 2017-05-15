<div id="footer">
    <?php
        $arr = array('PHP', 'MySQL', 'Apache');
        for ($i = 0; $i < count($arr); $i++) 
        { 
            echo "$arr[$i]<br/>";
        }
        
        $arrAssotiation = [ "first" => "PHP", 
             "second" => "MySQL", 
             "third" => "Apache"
        ];
         foreach($arrAssotiation as $key => $value) 
        { 
            echo "$key = $value<br/>"; 
        } 
    ?>
</div>
</body>
</html>