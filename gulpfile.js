/**
 *  This is path scenery configuration file where we get code, files, etc for using it in gulp to compile.
 */

// Get main module
import gulp from "gulp";

// Import path.js
import { path } from "./gulp/config/path.js";

// Passing a value to a global variable

global.app = {
    path: path,
    gulp: gulp
}

// Import task from ./gulp/tasks/...
import { copy } from "./gulp/tasks/copy.js";

// Executing the Default Script
gulp.task('default', copy)