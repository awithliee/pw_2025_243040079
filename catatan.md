# Pengulangan dan Percabangan

## Pengulangan

### For
Digunakan untuk mengulang blok kode sejumlah tertentu.
```php
for (nilai_awal; kondisi_terminasi; increment_decrement) {
    // aksi
}
```

### While
Digunakan untuk mengulang blok kode selama kondisi terpenuhi.
Komponen while:
1. Nilai awal / inisialisasi berupa variabel
2. Kondisi terminasi / kapan harus berhenti
3. Increment / decrement

Contoh while:
```php
while (kondisi) {
    echo "Hello World";
}
```

Contoh infinite loop:
```php
while (true) {
    echo "Ini adalah loop tanpa akhir";
}
```

### Do While
Digunakan untuk mengulang blok kode setidaknya satu kali, kemudian mengulang selama kondisi terpenuhi.
```php
do {
    // aksi
} while (kondisi);
```

## Percabangan

### If
Digunakan untuk mengeksekusi blok kode jika kondisi terpenuhi.
```php
if (kondisi) {
    // aksi jika kondisi terpenuhi
}
```

### Else
Digunakan untuk mengeksekusi blok kode jika kondisi if tidak terpenuhi.
```php
if (kondisi) {
    // aksi jika kondisi terpenuhi
} else {
    // aksi jika kondisi tidak terpenuhi
}
```

### Switch
Digunakan untuk memilih salah satu dari banyak blok kode yang akan dieksekusi.
```php
switch (ekspresi) {
    case nilai1:
        // aksi jika ekspresi == nilai1
        break;
    case nilai2:
        // aksi jika ekspresi == nilai2
        break;
    default:
        // aksi jika tidak ada kasus yang cocok
}
```