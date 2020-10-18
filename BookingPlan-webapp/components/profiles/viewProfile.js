import React from 'react'

export default function View() {
    return (
        <div className="card card-widget widget-user">
  {/* Add the bg color to the header using any of the bg-* classes */}
  <div className="widget-user-header text-white" style={{background: 'url("https://adminlte.io/themes/dev/AdminLTE/dist/img/photo1.png") center center'}}>
    <h3 className="widget-user-username text-right">Elizabeth Pierce</h3>
    <h5 className="widget-user-desc text-right">Web Designer</h5>
  </div>
  <div className="widget-user-image">
    <img className="img-circle" src="https://adminlte.io/themes/dev/AdminLTE/dist/img/user3-128x128.jpg" alt="User Avatar" />
  </div>
  <div className="card-footer">
    <div className="row">
      <div className="col-sm-4 border-right">
        <div className="description-block">
          <h5 className="description-header">3,200</h5>
          <span className="description-text">SALES</span>
        </div>
        {/* /.description-block */}
      </div>
      {/* /.col */}
      <div className="col-sm-4 border-right">
        <div className="description-block">
          <h5 className="description-header">13,000</h5>
          <span className="description-text">FOLLOWERS</span>
        </div>
        {/* /.description-block */}
      </div>
      {/* /.col */}
      <div className="col-sm-4">
        <div className="description-block">
          <h5 className="description-header">35</h5>
          <span className="description-text">PRODUCTS</span>
        </div>
        {/* /.description-block */}
      </div>
      {/* /.col */}
    </div>
    {/* /.row */}
  </div>
</div>

    )
}
