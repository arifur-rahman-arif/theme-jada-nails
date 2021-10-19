const path = require("path");
const glob = require("glob-all");
const PATHS = {
    html: path.join(__dirname, "/**.html"),
    scripts: path.join(__dirname, "Src"),
    includes: path.join(__dirname, "/**/*.php"),
};
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const PurgecssPlugin = require("purgecss-webpack-plugin");
const config = (env, options) => {
    // scss loader based on prod or dev mode
    let scssLoader = () => {
        if (options.mode == "production") {
            return {
                loader: MiniCssExtractPlugin.loader,
            };
        } else {
            return {
                loader: "style-loader",
            };
        }
    };

    let productionPlugins = () => {
        if (options.mode == "production") {
            return [
                new PurgecssPlugin({
                    paths: glob.sync(
                        [`${PATHS.html}`, `${PATHS.scripts}/**/*.js`, `${PATHS.includes}`],
                        {
                            nodir: true,
                        }
                    ),
                }),
                new MiniCssExtractPlugin({
                    filename: "Css/[name].min.css",
                }),
            ];
        } else {
            return [
                new BrowserSyncPlugin({
                    host: "localhost",
                    port: 5000,
                    injectChanges: true,
                    watch: true,
                    reloadOnRestart: true,
                    reloadDelay: 300,
                    files: ["./**/*.php", "./**/*.html"],
                    watchEvents: ["change", "add", "unlink", "addDir", "unlinkDir"],
                    proxy: "http://jada-nails.local.com/",
                }),
            ];
        }
    };

    return {
        mode: options.mode,
        entry: {
            main: {
                import: path.resolve(__dirname, "Src/Scripts/index.js"),
                filename: "Scripts/[name].min.js",
            },
        },
        output: {
            path: path.resolve(__dirname, "Public"),
        },
        module: {
            rules: [
                {
                    test: /\.js$/,
                    exclude: /node_modules/,
                    use: [
                        {
                            loader: "babel-loader",
                            options: {
                                presets: ["@babel/preset-env"],
                            },
                        },
                    ],
                },
                {
                    test: /.s?css$/,
                    use: [
                        scssLoader(),
                        {
                            loader: "css-loader",
                            options: {
                                sourceMap: true,
                                url: true,
                            },
                        },
                        {
                            loader: "postcss-loader",
                            options: {
                                postcssOptions: {
                                    plugins: [["postcss-preset-env"]],
                                },
                            },
                        },
                        {
                            loader: "sass-loader",
                            options: {
                                sourceMap: true,
                            },
                        },
                    ],
                },
            ],
        },
        plugins: productionPlugins(),
        devtool: "source-map",
        watch: true,
        watchOptions: {
            ignored: ["node_modules/**"],
        },
    };
};

module.exports = config;
