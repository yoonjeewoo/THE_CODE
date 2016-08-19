<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
</head>
<body>
    <div id="navbar" class="navbar navbar-default navbar-fixed-top">
        <div class="navbar-header">
            <h3>THE CODE</h3>
        </div>
    </div>
    <br>
    <br>
    <br>
    <?php
        $id=$_GET['id'];
        
    ?>
    <div id="blank_form">
    <div class="container">
        <form class="form-horizontal" id="form1" name="form1" method="post" action="./y_add_topic.php?id=<?php echo $id ?>">
            <div class="form-group" align="center">
            <h3>CODE SUBMIT PAGE</h3>
            
            </div>
            <div class="form-group">
                <h4><div class="col-sm-12" align="center">
                    <input type="radio" name="code" id="code" value="c">C/C++
                    <input type="radio" name="code" id="code" value="java">JAVA
                    <input type="radio" name="code" id="code" value="python">PYTHON
                    <input type="radio" name="code" id="code" value="r">R
                </div>
                </h4>
            </div>
            
            <div class="form-group">
                <label for="topic" class="col-sm-2 control-label">TITLE</label>
                <div class="col-sm-10">
                    <input name="topic" type="text" class="form-control" id="topic" size="50" />
                </div>
            </div>
            <div class="form-group">
                <label for="code" class="col-sm-2 control-label">CODE</label>
                <div class="col-sm-10">
                    <textarea name="detail" class="form-control" cols="50" rows="3" id="detail"></textarea>
                </div>
            </div> 
            <div class="form-group">
                <label for="topic" class="col-sm-2 control-label">NAME</label>
                <div class="col-sm-10">
                    <input name="name" type="text" class="form-control" value="<?php echo $id; ?>"id="name" size="50" />
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">SUBMIT</button>
                    <a id="button" class="btn btn-default" href="./y_main_forum.php?id=<?php echo $id ?>&code=all" role="button">GO BACK</a>
                </div>
            </div>
            
        </form>
    </div>
    </div>
</body>
</html>