https://www.webprofessional.jp/wordpress-theme-automation-with-gulp/
- npm init
- npm install gulp --save-dev
- npm install es6-promise --save-dev
    - gulp-autoprefixerのようなGulpのタスクの中にはES6のPromiseのサポートが必要なものもあるので、その場合はes6-promiseのポリフィルをインストールし、次のように、gulpfile.jsの先頭でES6のPromiseを呼び出します。
- npm install gulp-sass gulp-autoprefixer --save-dev
- npm install gulp-rtlcss gulp-rename --save-dev
    - CSSプロパティをすべて変換して、ファイル名をrtl.cssに変更し、ファイルをテーマのルートディレクトリに出力します。
- npm install gulp-plumber gulp-util --save-dev
    - エラーがでたときにgulpが中断しなくなり`gulp-util`でブザー音がなる

## gulpfile.js

- ファイルの先頭でes6-promiseのポリフィルを呼び出し、Gulpにインポート
- defaultタスクを作成

```gulpfile.js
require('es6-promise').polyfill();

var gulp = require('gulp');

// default task
gulp.task('default');
```


```gulpfile.js
require('es6-promise').polyfill();
var gulp          = require('gulp');
var sass          = require('gulp-sass');
var autoprefixer  = require('gulp-autoprefixer');

gulp.task('sass', function() {
  return gulp.src('./sass/**/*.scss')
  .pipe(sass())
  .pipe(autoprefixer())
  .pipe(gulp.dest('./'))
});

gulp.task('default', ['sass']);
```

- CSSプロパティをすべて変換して、ファイル名をrtl.cssに変更し、ファイルをテーマのルートディレクトリに出力します。

```gulpfile.js
var rtlcss       = require('gulp-rtlcss');
var rename       = require('gulp-rename');

gulp.task('sass', function() {
  return gulp.src('./sass/*.scss')
  .pipe(sass())
  .pipe(autoprefixer())
  .pipe(gulp.dest('./'))              // Output LTR stylesheets (style.css)

  .pipe(rtlcss())                     // Convert to RTL
  .pipe(rename({ basename: 'rtl' }))  // Rename to rtl.css
  .pipe(gulp.dest('./'));             // Output RTL stylesheets (rtl.css)
});
```

- エラーがでたときにgulpが中断しなくなり`gulp-util`でブザー音がなる

- onError機能を追加して、エラーメッセージをログに記録し、ブザー音を設定
- plumber機能を使うためにsassタスクを更新し、onError機能をerrorHandlerオブジェクトのプロパティに渡す

```gulpfile.js
var plumber = require('gulp-plumber');
var gutil = require('gulp-util');

var onError = function (err) {
  console.log('An error occurred:', gutil.colors.magenta(err.message));
  gutil.beep();
  this.emit('end');
};

gulp.task('sass', function() {
  return gulp.src('./sass/*.scss')
  .pipe(plumber({ errorHandler: onError }))
  //
  //
});
```

## javascript用
- npm install gulp-concat --save-dev
- npm install gulp-jshint --save-dev
- npm install gulp-uglify --save-dev

jshintでコードエラーを確認してから、コードエラーをapp.jsに連結し、縮小した出力が必要なので、ファイル名をapp.min.jsに変更します。そのあとコードを縮小し、最後にファイルを./jsディレクトリに出力します。


gulpfile.jsに追加
```gulpfile.js
var concat = require('gulp-concat');
var jshint = require('gulp-jshint');
var uglify = require('gulp-uglify');

gulp.task('js', function() {
  return gulp.src(['./js/*.js'])
    .pipe(jshint())
    .pipe(jshint.reporter('default'))
    .pipe(concat('app.js'))
    .pipe(rename({suffix: '.min'}))
    .pipe(uglify())
    .pipe(gulp.dest('./js'))
});
```

### `.jshintrc`を作成

- undef：宣言されなかった変数を使うときに警告
- unused：変数を定義して一度も使用されていないときに警告
- browser：最新ブラウザーで登場したnavigatorやdocumentなどのグローバルオブジェクトを定義

```.jshintrc
{
  "undef": true,
  "unused": true,
  "browser": true
}
```

## 画像の最適化
images/src
images/dest

srcに入っている画像を最適化しdestにいれる

- npm install gulp-imagemin --save-dev

## BrowserSyncでブラウザーをリフレッシュする
- npm install browser-sync --save-dev
