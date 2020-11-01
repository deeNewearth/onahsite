const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

var config = {
    
    entry: './src/index.ts',
    module: {
        rules: [
            { test: /\.tsx?$/, loader: "ts-loader" }, 

            {
                test: /\.css$/,
                use: ['style-loader', 'css-loader']
            },

            { test: /\.scss$/, use: [ 
                {loader: MiniCssExtractPlugin.loader},
                //{ loader: "style-loader" },  // to inject the result into the DOM as a style block
                //{ loader: "css-modules-typescript-loader"},  // to generate a .d.ts module next to the .scss file (also requires a declaration.d.ts with "declare modules '*.scss';" in it to tell TypeScript that "import styles from './styles.scss';" means to load the module "./styles.scss.d.td")
                { loader: "css-loader"},
                //{ loader: "css-loader", options: { modules: true } },  // to convert the resulting CSS to Javascript to be bundled (modules:true to rename CSS classes in output to cryptic identifiers, except if wrapped in a :global(...) pseudo class)
                { loader: "sass-loader" },  // to convert SASS to CSS
                // NOTE: The first build after adding/removing/renaming CSS classes fails, since the newly generated .d.ts typescript module is picked up only later
            ] }, 
            
            { test: /\.(png|jpg|jpeg|gif|svg)$/, use: 'url-loader?limit=35000' },
            { test: /\.(woff2|woff|ttf|eot|svg)(\?v=[a-z0-9]\.[a-z0-9]\.[a-z0-9])?$/, use: 'url-loader?limit=35000' }

        ]
    },
    plugins: [
        new MiniCssExtractPlugin({

            filename: '[name].css',
            chunkFilename: '[id].css',
            ignoreOrder: false, 

        })
    ],
    output: {
        filename: 'main.js',
        path: path.resolve(__dirname, 'wpTheme/dist')
    }
};

module.exports = (env, argv) => {
  
    if (argv.mode === 'production') {

        console.log('using production mode');
        config.mode = "production";
    }else{
        console.log('using development mode');
        config.devtool = 'source-map';
        config.mode = "development";

    }
  
    return config;
  };