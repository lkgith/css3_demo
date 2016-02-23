<html>
<head>
  <title>git 常用命令</title>
    <link rel="stylesheet" type="text/css" href="/static/dafengche/dafengche.css">
</head>
<body>
  <div class="content">
    {%foreach from=$blockArr key=num item="item"%}
    <div class="blocks {%$item%}">
      <div class="rotate-block">
        <div class="rotate-line rotate-line-X">
          <div class="rotate-line-X-block rotate-line-X-left-upper"></div>
          <div class="rotate-line-X-block rotate-line-X-left-below"></div>
          <div class="rotate-line-X-block rotate-line-X-right-upper"></div>
          <div class="rotate-line-X-block rotate-line-X-right-below"></div>
        </div>

        <div class="rotate-line rotate-line-Y">
          <div class="rotate-line-Y-block rotate-line-Y-left-upper"></div>
          <div class="rotate-line-Y-block rotate-line-Y-left-below"></div>
          <div class="rotate-line-Y-block rotate-line-Y-right-upper"></div>
          <div class="rotate-line-Y-block rotate-line-Y-right-below"></div>
        </div>
      </div>
      <div class="base-block"></div>
    </div>
    {%/foreach%}
  </div>
</body>
</html>