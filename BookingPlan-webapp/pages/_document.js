import React, { Component } from 'react'
import Document, { Html, Head, Main, NextScript } from 'next/document'
// แก้ไข Html แบบกำหนดเอง
class MyDocument extends Document {
    static async getInitialProps(ctx) {
      const initialProps = await Document.getInitialProps(ctx)
      return { ...initialProps }
    }
    render() {
      return (
        <Html>
          <Head />
          <body className="sidebar-mini">
              <div className="wrapper">
            <Main />
            <NextScript />
              </div>
          <script src="admin-lte/plugins/jquery/jquery.min.js"></script>
          <script src="admin-lte/plugins/jquery-ui/jquery-ui.min.js"></script>
          <script src="admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
          <script src="admin-lte/dist/js/adminlte.js"></script>
          </body>
        </Html>
      )
    }
  }
  
  export default MyDocument