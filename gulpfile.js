/**
 *  This is path scenery configuration file where we get code, files, etc for using it in gulp to compile.
 */

// Get main module
import gulp from "gulp";

// Import path.js
import { path } from "./gulp/config/path.js";

// Import main plugins from plugins.js
import { plugins } from "./gulp/config/plugins.js";

// Passing a value to a global variable
global.app = {
    path: path,
    gulp: gulp,
    plugins: plugins
}

// Import tasks from ./gulp/tasks/...
import { copy } from "./gulp/tasks/copy.js";
import { reset } from "./gulp/tasks/reset.js";
import { scss } from "./gulp/tasks/scss.js";

// File change watcher in ./source/src/...

function wathcer() {
    gulp.watch(
        path.watch.files, copy
    );
    gulp.watch(
        path.watch.scss, scss
    );
}

// Main tasks to do
const mainTasks = gulp.parallel(copy, scss)

// Executing the Default Script
const dev = gulp.series(reset, mainTasks, gulp.parallel(wathcer));

gulp.task('default', dev);