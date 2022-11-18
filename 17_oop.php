<?php include 'inc/header.php'; //require?>
<title>OOP</title>
<body>


<br></br>
<?php
class User{
  // Properties (attributes)
  public $name;
  private $email;
  protected $password;
  // Methods (functions)
  function set_name($name){
    $this->name = $name;
  }
  function get_name(){
    return $this->name;
  }
}
class User2{
  // Properties (attributes)
  public $name;
  private $email;
  protected $password;
   // Constructor runs when created
  public function __construct($name){
    $this->name = $name;
  }
}
$user1=new User();
echo'class User{<br>  public $name;<br>  private $email;<br>protected $password;<br>}<br><br>$user1=new User();<br><br>';
echo'output:<br>';
echo var_dump($user1).':<br>';
?>
<hr></hr>
<br></br>
<?php
echo'$user1->name="Kadir";<br><br>';
$user1->name="Kadir";
echo'output:<br>';
echo $user1->name.'<br>';
?>
<hr></hr>
<br></br>
<?php
echo'in the User class:<br><br>function set_name($name){<br>  $this->name = $name;<br>}<br><br>$user1->set_name("Abdulkadir");<br><br>';
$user1->set_name("Abdulkadir");
echo'output:<br>';
echo $user1->name.'<br>';
?>
<hr></hr>
<br></br>
<?php
echo'in the User class:<br><br>function get_name(){<br>  return $this->name;<br>}<br><br>echo $user1->get_name();<br><br>';
echo'output:<br>';
echo $user1->get_name().'<br>';
?>
<hr></hr>
<br></br>
<?php
echo'in the User2 class:<br><br>public function __construct($name){<br>  $this->name = $name;<br>}<br><br>$user2=new User2("Kadir");<br><br>';
echo'output:<br>';
$user2=new User2("Kadir");
echo $user2->name;
?>
<hr></hr>
<br></br>
<?php
//Inheritance
class Employee extends User{
  public function __construct($name,$title){
    $this->name = $name;
    // or
    // call parent constructor
    // parent::__construct($name);    
    $this->title = $title;
  }
  public function get_title(){
    return $this->title;
  }
}
$employee1=new Employee("Kadir","Developer");
echo'class Employee extends User{<br>  public function __construct($name,$title){<br>    $this->name = $name;<br>    $this->title = $title;<br>  }<br>  public function get_title(){<br>    return $this->title;<br>  }<br>}<br><br>$employee1=new Employee("Kadir","Developer");<br><br>';
echo'output:<br>';
echo $employee1->name;
echo '<br>';
echo $employee1->get_title();
?>
<hr></hr>
<br></br>
<?php
echo'output:<br>';
?>
<hr></hr>
<br></br>
<?php
echo'output:<br>';
?>
<hr></hr>
<br></br>
<?php
echo'output:<br>';
?>
<hr></hr>
<br></br>
<?php
echo'output:<br>';
?>
<hr></hr>
<br></br>
<?php
echo'output:<br>';
?>
<hr></hr>
<br></br>

</body>
</html>