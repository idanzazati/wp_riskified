# Custom Tabs Plugin
The plugin is already in the plugins tab, by clicking on activate, you can use the shortcode "[custom-tabs]" to display the component in any page you want.

# Build process
for the build process I've installed webpack tool.
I've created "webpack.config.js" in the root directory for the configuration of the webpack, and add to package.json file the "build" command (npm run build).
i've created "src" folder in the root directory and added "index.js" file inside, this file is importing the "custom-tabs.scss" file which is located in the "css" folder of the "custom-tabs-plugin" in order to compile it to regular css so the browser could read it.
the build process compiling the scss file to a css file in "dist" folder which is located in the root directory.


the build process should look like this:

> build
> webpack --mode production

asset style.css 2.65 KiB [compared for emit] (name: main)
asset bundle.js 0 bytes [compared for emit] [minimized] (name: main)
Entrypoint main 2.65 KiB = style.css 2.65 KiB bundle.js 0 bytes
orphan modules 5.44 KiB (javascript) 937 bytes (runtime) [orphan] 8 modules
cacheable modules 71 bytes (javascript) 2.65 KiB (css/mini-extract)
  ./src/index.js 71 bytes [built] [code generated]
  css ./node_modules/css-loader/dist/cjs.js!./node_modules/sass-loader/dist/cjs.js!./wp-content/plugins/custom-tabs-plugin/css/custom-tabs.scss 2.65 KiB [built] [code generated]
webpack 5.92.1 compiled successfully in 1152 ms