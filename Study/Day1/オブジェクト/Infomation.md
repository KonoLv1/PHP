## �I�u�W�F�N�g�w���Ƃ͂Ȃ񂼂�

�I�u�W�F�N�g�i���́j�𒆐S�ɂ����l����

## �N���X

�I�u�W�F�N�g�̐݌v�}�ł���B��������ƂɃI�u�W�F�N�g�i���́j�𐶐�����B

### ��`�i�u�b�N�N���X�j

```php.index
<?php
	class Book{
}
?>
```

�N���X�̖��O�͑啶���Ŏn�߂邱�ƁB

### �v���p�e�B

�C���X�^���X�����f�[�^

### ��`

```php.index
<?php
	class Book{
		public $title;
	}
?>
```
��L�Ń^�C�g���v���p�e�B���`���Ă���

### �v���p�e�B�ւ̃A�N�Z�X

```php.index
<?php
	class Book{
		public $title;
	}
	$japan = new Book();
	$japan->name ="���{��";
	echo $japan->name;
?>
```

### ���\�b�h

�C���X�^���X�Ɋ֘A���鏈��

### ��`
```php.index
<?php
	class Menu{
		public function hello(){
			echo "����ɂ���";
		}
	}
}
```	

## �C���X�^���X

�N���X�����ɐ������ꂽ���̂̂��ƁB

### ��`

```php.index
<?php
	class Book{
}
$book1 = new Book();
$book2 = new Book();
$book3 = new Book();
?>
```

��L�ŕϐ�book1�Abook2�Abook3�ɃC���X�^���X�������Ă���B<br>
�C���X�^���X�̐����̓N���X�̊O�ōs�����ƁB