<h3>Рецепты</h3>
<div>
<?php

//var_dump($data);
foreach($data as $key => $recipe)
{
    echo '<div class="container">
    <h4 style="color: blue; background-color: #c4e5f1">'.$key.'<h4>
    <h6>Автор: '.$recipe['Автор'].'</h6>
    <p style="background-color: #a99d8f">'.$recipe['recipe'].'</p>
    </div><div class="container"><h5>Коментарии</h5>';
    foreach($recipe['Коментарии'] as $comment)
    {
        echo '<h6>'.$comment['user'].'</h6>
        <p>'.$comment['text'].'</p>
        </div>';
    }
};
    
        
	
?>