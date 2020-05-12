<?php
echo view('template/header',['css'=>$css,'js'=>$js]);
echo view('template/sidebar');
if ($view=='') {
    echo view('template/blank');
}else{
    echo view($view);
}
echo view('template/footer');
?>