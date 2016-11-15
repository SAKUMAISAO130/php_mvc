<?php
spl_autoload_register ( 

function ($class) {
    $prefix = 'MyApp\\';
    if (strpos ( $class, $prefix ) === 0) { // MyAppが先頭から取得できたら実行
        $className = substr ( $class, strlen ( $prefix ) ); // MyAppを除去
        $classFilePath = __DIR__ . '/../lib/' . str_replace ( '\\', '/', $className ) . '.php'; // libディレクトリにクラスファイルがあることが前提になる。名前空間付きクラス宣言をクラスファイルパスにしているのみ
        if (file_exists ( $classFilePath )) { // クラスのファイルパスが取得できた場合の処理
            require $classFilePath; // requireしてあげるっだけ
        }
    }
} );

