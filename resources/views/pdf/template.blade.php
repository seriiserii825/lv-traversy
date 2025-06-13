{{-- resources/views/pdf/template.blade.php --}}
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <style>
    body { font-family: sans-serif; padding: 2rem; }

    .flex-container {
      display: flex;
      gap: 20px;
      background: #f0f0f0;
      padding: 1rem;
    }

    .grid-container {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 1rem;
      margin-top: 2rem;
    }

    .absolute-wrapper {
      position: relative;
      height: 150px;
      margin-top: 2rem;
      background: #eee;
    }

    .absolute-box {
      position: absolute;
      top: 10px;
      right: 10px;
      background: #f44336;
      color: white;
      padding: 5px 10px;
    }
  </style>
</head>
<body>
  <h1>PDF Layout Preview</h1>

  <div class="flex-container">
    <div style="flex:1; background:#ccc; padding:10px;">Flex Box 1</div>
    <div style="flex:1; background:#aaa; padding:10px;">Flex Box 2</div>
  </div>

  <div class="grid-container">
    <div style="background:#ddd; padding:10px;">Grid A</div>
    <div style="background:#bbb; padding:10px;">Grid B</div>
  </div>

  <div class="absolute-wrapper">
    <div class="absolute-box">Absolute Box</div>
  </div>
</body>
</html>
