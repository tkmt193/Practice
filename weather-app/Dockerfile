# ベースイメージの設定
FROM node:latest

# コンテナ内の作業ディレクトリの設定
WORKDIR /app

# package.jsonとpackage-lock.jsonをコピー
COPY package*.json ./

# 依存関係のインストール
RUN npm install

# アプリケーションのソースコードをコピー
COPY . .

# アプリケーションのビルド
RUN npm run build

# ポート番号の設定
EXPOSE 8080

# コンテナ起動時のコマンド設定
CMD ["npm", "run", "serve"]
