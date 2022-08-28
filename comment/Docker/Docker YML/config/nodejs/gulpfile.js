
const {src,dest,parallel, series, watch } = require("gulp");
function defaultTask(cb) {
  // place code for your default task here
  cb();
}

exports.default = defaultTask;
watch('./src/*.*', series(defaultTask));
