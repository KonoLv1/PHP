## オブジェクト指向とはなんぞや

オブジェクト（物体）を中心にした考え方

## クラス

オブジェクトの設計図である。これをもとにオブジェクト（実体）を生成する。

### 定義（ブッククラス）

```php.index
<?php
	class Book{
}
?>
```

クラスの名前は大文字で始めること。

### プロパティ

インスタンスが持つデータ

### 定義

```php.index
<?php
	class Book{
		public $title;
	}
?>
```
上記でタイトルプロパティを定義している

### プロパティへのアクセス

```php.index
<?php
	class Book{
		public $title;
	}
	$japan = new Book();
	$japan->name ="日本語";
	echo $japan->name;
?>
```

### メソッド

インスタンスに関連する処理

### 定義
```php.index
<?php
	class Menu{
		public function hello(){
			echo "こんにちは";
		}
	}
}
```	

## インスタンス

クラスを元に生成された実体のこと。

### 定義

```php.index
<?php
	class Book{
}
$book1 = new Book();
$book2 = new Book();
$book3 = new Book();
?>
```

上記で変数book1、book2、book3にインスタンスを代入している。<br>
インスタンスの生成はクラスの外で行うこと。

### this

メソッド内でインスタンスのプロパティやメソッドにアクセスしたいときに使う特殊な変数