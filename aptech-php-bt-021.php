
<?php
$ngonNgu = [
    'Java' => [
        'name' => 'Java',
        'year' => 1995,
        'frameworks' => ['Spring', 'Hibernate', 'Struts']
    ],
    'C#' => [
        'name' => 'C#',
        'year' => 2000,
        'frameworks' => ['.NET', 'Xamarin', 'Unity']
    ],
    'PHP' => [
        'name' => 'PHP',
        'year' => 1995,
        'frameworks' => ['Laravel', 'Symfony', 'CodeIgniter']
    ],
    'Javascript' => [
        'name' => 'Javascript',
        'year' => 1995,
        'frameworks' => ['React', 'Vue', 'Angular']
    ],
    'Python' => [
        'name' => 'Python',
        'year' => 1991,
        'frameworks' => ['Django', 'Flask', 'Pyramid']
    ],
];

echo "<h1>Bai 1.</h1>";

echo "<h2>-Viết script in 5 ngôn ngữ trên và thông tin của chúng ra màn hình theo dạng list.</h2><ul>";
foreach ($ngonNgu as $NGONNGU) {
    echo "<li>";
    echo "{$NGONNGU['name']} - Year: {$NGONNGU['year']}";
    echo "<ul>";
    foreach ($NGONNGU['frameworks'] as $framework) {
        echo "<li>$framework</li>";
    }
    echo "</ul>";
    echo "</li>";
}
echo "</ul>";


uksort($ngonNgu, function($a, $b) use ($ngonNgu) {
    return strcmp($ngonNgu[$a]['name'], $ngonNgu[$b]['name']);
});

echo "<h2>-Viết script để sắp xếp các ngôn ngữ dựa trên tên của chúng.</h2><ul>";
foreach ($ngonNgu as $NGONNGU) {
    echo "<li>";
    echo "{$NGONNGU['name']} - Year: {$NGONNGU['year']}";
    echo "<ul>";
    foreach ($NGONNGU['frameworks'] as $framework) {
        echo "<li>$framework</li>";
    }
    echo "</ul>";
    echo "</li>";
}
echo "</ul>";

uksort($ngonNgu, function($a, $b) use ($ngonNgu) {
   return strcmp($ngonNgu[$a]['name'], $ngonNgu[$b]['name']);
});

echo "<h2>-Viết thêm xử lý để thêm 2 ngôn ngữ Golang và Ruby.</h2>";
$ngonNgu["Golang"] = [
   "name" => "Golang",
   "year" => 2009,
   "frameworks" => ["Gin", "Beego", "Echo"],
];
$ngonNgu["Ruby"] = [
   "name" => "Ruby",
   "year" => 1995,
   "frameworks" => ["Rails", "Sinatra", "Hanami"],
];

echo "<ul>";
foreach ($ngonNgu as $NGONNGU) {
    echo "<li>";
    echo "{$NGONNGU['name']} - Year: {$NGONNGU['year']}";
    echo "<ul>";
    foreach ($NGONNGU['frameworks'] as $framework) {
        echo "<li>$framework</li>";
    }
    echo "</ul>";
    echo "</li>";
}
echo "</ul>";

echo "<h2>-Viết thêm xử lý để xoá ngôn ngữ Javascript.</h2>";
$ngonNgu["Golang"] = [
   "name" => "Golang",
   "year" => 2009,
   "frameworks" => ["Gin", "Beego", "Echo"],
];
$ngonNgu["Ruby"] = [
   "name" => "Ruby",
   "year" => 1995,
   "frameworks" => ["Rails", "Sinatra", "Hanami"],
];

unset($ngonNgu['Javascript']);

echo "<ul>";
foreach ($ngonNgu as $NGONNGU) {
    echo "<li>";
    echo "{$NGONNGU['name']} - Year: {$NGONNGU['year']}";
    echo "<ul>";
    foreach ($NGONNGU['frameworks'] as $framework) {
        echo "<li>$framework</li>";
    }
    echo "</ul>";
    echo "</li>";
}
echo "</ul>";

?>


