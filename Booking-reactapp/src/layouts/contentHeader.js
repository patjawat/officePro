import React from 'react'

export default function ContentHeader({children,title}) {
    return (
        <div className="content-wrapper" style={{minHeight: 398}}>
        {/* Content Header (Page header) */}
        <div className="content-header">
          <div className="container">
            <div className="row mb-2">
              <div className="col-sm-6">
                <h1 className="m-0 text-dark"> {title}</h1>
              </div>{/* /.col */}
              <div className="col-sm-6">
                <ol className="breadcrumb float-sm-right">
                  <li className="breadcrumb-item"><a href="#">Home</a></li>
                  <li className="breadcrumb-item"><a href="#">Layout</a></li>
                  <li className="breadcrumb-item active">Top Navigation</li>
                </ol>
              </div>{/* /.col */}
            </div>{/* /.row */}
          </div>{/* /.container-fluid */}
        </div>
        {/* /.content-header */}
        {/* Main content */}
        <div className="content">
          <div className="container">
{children}
          </div>{/* /.container-fluid */}
  </div>
  {/* /.content */}
</div>
    )
}
