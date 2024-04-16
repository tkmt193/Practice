<!DOCTYPE html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <?php
    function charge($rank=null,$days=1){
        switch($rank){
                case "A":
                    $ryoukin = 15000*$days;
                    break;
                case "B":
                    $ryoukin = 12000*$days;
                    break;
                default:
                    echo "No match!";
                    $ryoukin = 8000*$days;
                    break;
            }
            return $ryoukin;
        }
        
    ?>
    <?php
    $kingaku1 = charge();
    echo "料金は{$kingaku1}円";
    ?>
</body>
</html>