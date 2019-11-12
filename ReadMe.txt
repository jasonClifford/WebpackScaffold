**This is a webpack/laravelmix application. Its pourpose is to do work in the _THEMEBUILDER folder and have it output to a Theme dir outside the parent folder.
**In this module it is outputing to the "Synaptic" folder but this can be changed in the webpack.mix.js file that dictates the output path. 
**You must have the Exterior folder made first (eg. in this case the Synaptic folder must first exist or you will get a path error.)
**npm run watch is the terminal command to exicute the copy and laravel watch external and local proxy watching.
**To add more js files into the main app.js output-> create file and add name in webpack.mix.js within the Array.
**jQuery CAN be loaded only through the use of the wp_enque_scripts function. looks like it cannot be added in conjunction 
with any other scripts (in same cusom function)