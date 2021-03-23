<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<?php
/**
* Название класса Item 
* 
* Опрделение свойств и методов объектов класса Item
* 
* @Сычев Александр, 999sega999@gmail.com
* @version 1.0
*/
final class Item{
	/**
   * Свойствf класса
   * 
   * @var id int 
   * @var name string - имя 
   * @var status string - статус 
   * @var changed bool - наличие изменений
   */
private $id;
private $name;
private $status;
private $changed;
   /**
   * Конструктор класса
   * 
   * @param int $id целое
   * @return object
   */
function __construct($id){
   init($id) 
}
/**
   * Метод инициализации объекта
   * 
   * @param int $id целое
   * @return object
   */
private function init($id){
	if $changed == false {
		$item = new Item();
		$item->name = "Саша"
		$item->status = "В поиске"
		$item->changed = True
	}else{
		print ("Данные объект инициализирован")
	}
}
/**
   * Метод сохранения изменений данных объекта
   * 
   * @param int $id 
   * @
   */
public function save($id){
$sql = "UPDATE `users` SET name = '$item->name', status = '$item->status'  WHERE `id` = '$id'"
}
/**
   * Геттер
   */
public function __get($property)
{
  if (property_exists($this, $property)) {
    return $this->$property;
  }
}
/**
   * Сеттер
   */
public function __set($property, $value){
  if (property_exists($this, $property)) {
    $this->$property = $value;
  }
 }
}

?>

<html>
<p>SELECT * FROM `users` JOIN `objects` ON users.object_id = objects.id</p>
</html>


<script>
$(document).keydown(function(e){
    switch (e.which){
    case 37:    //left arrow key
        alert("key left pressed");
        break;
    case 38:    //up arrow key
        alert("key up pressed");
        break;
    case 39:    //right arrow key
        alert("key right pressed");
        break;
    case 40:    //bottom arrow key
        alert("key down pressed");
        break;
    }
});
</script>