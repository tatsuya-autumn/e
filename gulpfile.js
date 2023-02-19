
const 
  gulp = require('gulp'),
  {src,dest,series,watch} = require('gulp'),
  sass = require('gulp-sass')(require('sass')),
  sassGlob = require('gulp-sass-glob-use-forward');

  const srcPath = {
      css: ['src/scss/**/*.scss', '!./_src/sass/**/_*.scss'],
      img: 'src/img/**/*',
      js: 'src/js/**/*',
      html: './**/*.html'
  }

  // 吐き出し先（なければ生成される）
  const destPath = {
      root: 'assets/',
      css: 'assets/css/',
      img: 'assets/img/',
      js: 'assets/js/'
  }
const scriptCopy = function(){
  return(
    gulp
    .src(srcPath.js)
    .pipe(dest(destPath.js))
  )
}

const sassCompile = function(){
  return(
    gulp
    .src(srcPath.css) //SCSS読み込み
    .pipe(sassGlob()) //SCSS @use の名前空間を省略可能にする
    .pipe(sass.sync({ //SCSSをコンパイル
      outputStyle: 'expanded' //出力するcssの形式
      }))
    )
    .pipe(dest(destPath.css))
}



const imgCopy = function(){
  return(
    gulp
    .src(srcPath.img)
    .pipe(dest(destPath.img))
  )
}

// ファイルの変更を検知
const watchFiles = () => {
    watch(srcPath.css, sassCompile)
    watch(srcPath.img, imgCopy)
}

// npx gulpで出力する内容
exports.default = series(scriptCopy, sassCompile, imgCopy, watchFiles);
