<?php
// 李民涛的个人信息
$name = "李民涛";
$age = 21;
$gender = "男";
$profession = "云计算专业";
$education = "大专";
$university = "焦作大学";
$email = "2823658353@qq.com";
$hobbies = ["编程", "阅读技术博客", "踢足球", "听音乐"];
$skills = [
    "PHP" => 75,
    "Python" => 70,
    "Linux" => 80,
    "Docker" => 65,
    "MySQL" => 75,
    "云计算基础" => 85
];
?>
<?DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?> - 个人介绍</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Microsoft YaHei', sans-serif;
        }
        body {
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
        }
        header {
            background: linear-gradient(135deg, #3498db, #2c3e50);
            color: white;
            padding: 40px 20px;
            text-align: center;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        .tagline {
            font-size: 1.2rem;
            opacity: 0.9;
        }
        .profile-img {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            margin: 20px auto;
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 5rem;
            color: #3498db;
            border: 5px solid #fff;
        }
        .section {
            background: white;
            padding: 25px;
            border-radius: 10px;
            margin-bottom: 25px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        .section h2 {
            color: #3498db;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #f0f0f0;
        }
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }
        .info-item {
            margin-bottom: 15px;
        }
        .info-label {
            font-weight: bold;
            color: #555;
        }
        .skills-container {
            margin-top: 20px;
        }
        .skill {
            margin-bottom: 15px;
        }
        .skill-name {
            display: flex;
            justify-content: space-between;
            margin-bottom: 5px;
        }
        .skill-bar {
            height: 10px;
            background-color: #e0e0e0;
            border-radius: 5px;
            overflow: hidden;
        }
        .skill-level {
            height: 100%;
            background: linear-gradient(90deg, #3498db, #2c3e50);
            border-radius: 5px;
        }
        .hobbies {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .hobby {
            background-color: #eaf2f8;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
        }
        footer {
            text-align: center;
            margin-top: 40px;
            padding: 20px;
            color: #777;
            font-size: 0.9rem;
        }
        @media (max-width: 768px) {
            .info-grid {
                grid-template-columns: 1fr;
            }
            header h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <header>
        <div class="profile-img">
            <span>李</span>
        </div>
        <h1><?php echo $name; ?></h1>
        <p class="tagline"><?php echo $university . ' ' . $profession; ?>学生</p>
    </header>

    <section class="section">
        <h2>基本信息</h2>
        <div class="info-grid">
            <div class="info-item">
                <span class="info-label">姓名：</span>
                <span><?php echo $name; ?></span>
            </div>
            <div class="info-item">
                <span class="info-label">年龄：</span>
                <span><?php echo $age; ?>岁</span>
            </div>
            <div class="info-item">
                <span class="info-label">性别：</span>
                <span><?php echo $gender; ?></span>
            </div>
            <div class="info-item">
                <span class="info-label">专业：</span>
                <span><?php echo $profession; ?></span>
            </div>
            <div class="info-item">
                <span class="info-label">学历：</span>
                <span><?php echo $education; ?></span>
            </div>
            <div class="info-item">
                <span class="info-label">院校：</span>
                <span><?php echo $university; ?></span>
            </div>
        </div>
    </section>

    <section class="section">
        <h2>技能专长</h2>
        <div class="skills-container">
            <?php foreach ($skills as $skill => $value): ?>
                <div class="skill">
                    <div class="skill-name">
                        <span><?php echo $skill; ?></span>
                        <span><?php echo $value; ?>%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-level" style="width: <?php echo $value; ?>%"></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section">
        <h2>兴趣爱好</h2>
        <div class="hobbies">
            <?php foreach ($hobbies as $hobby): ?>
                <div class="hobby"><?php echo $hobby; ?></div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section">
        <h2>联系方式</h2>
        <div class="info-item">
            <span class="info-label">电子邮箱：</span>
            <span><?php echo $email; ?></span>
        </div>
    </section>

    <footer>
        <p>© <?php echo date('Y'); ?> <?php echo $name; ?> 版权所有</p>
    </footer>
</div>
</body>
</html>
