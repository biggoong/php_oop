<h3>Рецепты</h3>
<div>
<?php

//var_dump($data);
foreach($data as $key => $recipe)
{
    echo '<div>
    <h4>'.$key.'<h4>
    <h5>Автор: '.$recipe['Автор'].'</h5>
    <p>'.$recipe['recipe'].'</p>
    </div><div><h5>Коментарии</h5>';
    foreach($recipe['Коментарии'] as $comment)
    {
        echo '<h5>'.$comment['user'].'</h5>
        <p>'.$comment['text'].'</p>
        </div>';
    }
};
    
        
	
?>