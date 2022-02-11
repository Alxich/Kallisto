/**
 *  This is plugins configuration file where we get plugins for using it in gulp to compile
 *  Use only plugins *
 */

// Importing plugins
import plumber from "gulp-plumber"; //Check before compile all errors that can appear from scss etc
import notify from "gulp-notify"; //Messages about error or good compile

// Export plugins

export const plugins = {
    plumber: plumber,
    notify: notify
}