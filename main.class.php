<?php


//主类，控制界面载入，
class main{
    private $index;
    private $_send;
    /**
     * main constructor.
     * @param $_index
     */
    public function __construct($_index=''){
        $this->index=$_index;
        if(isset($_POST['send'])){
            $this->_send=$_POST['send'];
        }
    }

    //运行总的方法
    public function _run(){
        //界面
        require $this->ui();

        //接受数据
         $this->send();
    }

    /**
     * 控制界面
     */
    private function  ui(){
        if(empty($this->index) || !file_exists($this->index.'.inc.php')){
             $this->index='start';
        }
            return $this->index.'.inc.php';
    }
    //创建一个方法接受数据

    private  function send(){
//        return $this->_send;
    switch ($this->_send){
        case '注册':
            //直接new 使用了命名空间。。。
          /* $_reg = new login();
           $_reg->query();*/
          $this->exec(new Reg($_POST['username'],$_POST['password'],$_POST['notpassword'],$_POST['email']));
            break;
        case '登录':
           /* $_reg  = new reg();
            $_reg->query();*/
           $this->exec(new Login($_POST['username'],$_POST['password']));
           break;
    }
    }
    private function exec($class){
        //如果不为空才插入
       if($class->check()){
           $class->query();
       }else{
           Tool::_loaction('字段为空');
       }
    }
}