import React from 'react'

export default function List() {
    return (
        <div>
           <div className="card card-widget collapsed-card">
  <div className="card-header">
    <div className="user-block">
      <img className="img-circle" src="https://adminlte.io/themes/v3/dist/img/user1-128x128.jpg" alt="User Image" />
      <span className="username"><a href="#">Jonathan Burke Jr.</a></span>
      <span className="description">Shared publicly - 7:30 PM Today</span>
    </div>
    {/* /.user-block */}
    <div className="card-tools">
      <button type="button" className="btn btn-tool" data-toggle="tooltip" title="Mark as read">
        <i className="far fa-circle" /></button>
      <button type="button" className="btn btn-tool" data-card-widget="collapse"><i className="fas fa-plus" />
      </button>
      <button type="button" className="btn btn-tool" data-card-widget="remove"><i className="fas fa-times" />
      </button>
    </div>
    {/* /.card-tools */}
  </div>
  {/* /.card-header */}
  <div className="card-body" style={{display: 'none'}}>
    <img className="img-fluid pad" src="../dist/img/photo2.png" alt="Photo" />
    <p>I took this photo this morning. What do you guys think?</p>
    <button type="button" className="btn btn-default btn-sm"><i className="fas fa-share" /> Share</button>
    <button type="button" className="btn btn-default btn-sm"><i className="far fa-thumbs-up" /> Like</button>
    <span className="float-right text-muted">127 likes - 3 comments</span>
  </div>
  {/* /.card-body */}
  <div className="card-footer card-comments" style={{display: 'none'}}>
    <div className="card-comment">
      {/* User image */}
      <img className="img-circle img-sm" src="../dist/img/user3-128x128.jpg" alt="User Image" />
      <div className="comment-text">
        <span className="username">
          Maria Gonzales
          <span className="text-muted float-right">8:03 PM Today</span>
        </span>{/* /.username */}
        It is a long established fact that a reader will be distracted
        by the readable content of a page when looking at its layout.
      </div>
      {/* /.comment-text */}
    </div>
    {/* /.card-comment */}
    <div className="card-comment">
      {/* User image */}
      <img className="img-circle img-sm" src="../dist/img/user4-128x128.jpg" alt="User Image" />
      <div className="comment-text">
        <span className="username">
          Luna Stark
          <span className="text-muted float-right">8:03 PM Today</span>
        </span>{/* /.username */}
        It is a long established fact that a reader will be distracted
        by the readable content of a page when looking at its layout.
      </div>
      {/* /.comment-text */}
    </div>
    {/* /.card-comment */}
  </div>
  {/* /.card-footer */}
  <div className="card-footer" style={{display: 'none'}}>
    <form action="#" method="post">
      <img className="img-fluid img-circle img-sm" src="../dist/img/user4-128x128.jpg" alt="Alt Text" />
      {/* .img-push is used to add margin to elements next to floating images */}
      <div className="img-push">
        <input type="text" className="form-control form-control-sm" placeholder="Press enter to post comment" />
      </div>
    </form>
  </div>
  {/* /.card-footer */}
</div>


<div className="card card-widget collapsed-card">
  <div className="card-header">
    <div className="user-block">
      <img className="img-circle" src="https://adminlte.io/themes/v3/dist/img/user1-128x128.jpg" alt="User Image" />
      <span className="username"><a href="#">Jonathan Burke Jr.</a></span>
      <span className="description">Shared publicly - 7:30 PM Today</span>
    </div>
    {/* /.user-block */}
    <div className="card-tools">
      <button type="button" className="btn btn-tool" data-toggle="tooltip" title="Mark as read">
        <i className="far fa-circle" /></button>
      <button type="button" className="btn btn-tool" data-card-widget="collapse"><i className="fas fa-plus" />
      </button>
      <button type="button" className="btn btn-tool" data-card-widget="remove"><i className="fas fa-times" />
      </button>
    </div>
    {/* /.card-tools */}
  </div>
  {/* /.card-header */}
  <div className="card-body" style={{display: 'none'}}>
    <img className="img-fluid pad" src="../dist/img/photo2.png" alt="Photo" />
    <p>I took this photo this morning. What do you guys think?</p>
    <button type="button" className="btn btn-default btn-sm"><i className="fas fa-share" /> Share</button>
    <button type="button" className="btn btn-default btn-sm"><i className="far fa-thumbs-up" /> Like</button>
    <span className="float-right text-muted">127 likes - 3 comments</span>
  </div>
  {/* /.card-body */}
  <div className="card-footer card-comments" style={{display: 'none'}}>
    <div className="card-comment">
      {/* User image */}
      <img className="img-circle img-sm" src="../dist/img/user3-128x128.jpg" alt="User Image" />
      <div className="comment-text">
        <span className="username">
          Maria Gonzales
          <span className="text-muted float-right">8:03 PM Today</span>
        </span>{/* /.username */}
        It is a long established fact that a reader will be distracted
        by the readable content of a page when looking at its layout.
      </div>
      {/* /.comment-text */}
    </div>
    {/* /.card-comment */}
    <div className="card-comment">
      {/* User image */}
      <img className="img-circle img-sm" src="../dist/img/user4-128x128.jpg" alt="User Image" />
      <div className="comment-text">
        <span className="username">
          Luna Stark
          <span className="text-muted float-right">8:03 PM Today</span>
        </span>{/* /.username */}
        It is a long established fact that a reader will be distracted
        by the readable content of a page when looking at its layout.
      </div>
      {/* /.comment-text */}
    </div>
    {/* /.card-comment */}
  </div>
  {/* /.card-footer */}
  <div className="card-footer" style={{display: 'none'}}>
    <form action="#" method="post">
      <img className="img-fluid img-circle img-sm" src="../dist/img/user4-128x128.jpg" alt="Alt Text" />
      {/* .img-push is used to add margin to elements next to floating images */}
      <div className="img-push">
        <input type="text" className="form-control form-control-sm" placeholder="Press enter to post comment" />
      </div>
    </form>
  </div>
  {/* /.card-footer */}
</div>


<div className="card card-widget collapsed-card">
  <div className="card-header">
    <div className="user-block">
      <img className="img-circle" src="https://adminlte.io/themes/v3/dist/img/user1-128x128.jpg" alt="User Image" />
      <span className="username"><a href="#">Jonathan Burke Jr.</a></span>
      <span className="description">Shared publicly - 7:30 PM Today</span>
    </div>
    {/* /.user-block */}
    <div className="card-tools">
      <button type="button" className="btn btn-tool" data-toggle="tooltip" title="Mark as read">
        <i className="far fa-circle" /></button>
      <button type="button" className="btn btn-tool" data-card-widget="collapse"><i className="fas fa-plus" />
      </button>
      <button type="button" className="btn btn-tool" data-card-widget="remove"><i className="fas fa-times" />
      </button>
    </div>
    {/* /.card-tools */}
  </div>
  {/* /.card-header */}
  <div className="card-body" style={{display: 'none'}}>
    <img className="img-fluid pad" src="../dist/img/photo2.png" alt="Photo" />
    <p>I took this photo this morning. What do you guys think?</p>
    <button type="button" className="btn btn-default btn-sm"><i className="fas fa-share" /> Share</button>
    <button type="button" className="btn btn-default btn-sm"><i className="far fa-thumbs-up" /> Like</button>
    <span className="float-right text-muted">127 likes - 3 comments</span>
  </div>
  {/* /.card-body */}
  <div className="card-footer card-comments" style={{display: 'none'}}>
    <div className="card-comment">
      {/* User image */}
      <img className="img-circle img-sm" src="../dist/img/user3-128x128.jpg" alt="User Image" />
      <div className="comment-text">
        <span className="username">
          Maria Gonzales
          <span className="text-muted float-right">8:03 PM Today</span>
        </span>{/* /.username */}
        It is a long established fact that a reader will be distracted
        by the readable content of a page when looking at its layout.
      </div>
      {/* /.comment-text */}
    </div>
    {/* /.card-comment */}
    <div className="card-comment">
      {/* User image */}
      <img className="img-circle img-sm" src="../dist/img/user4-128x128.jpg" alt="User Image" />
      <div className="comment-text">
        <span className="username">
          Luna Stark
          <span className="text-muted float-right">8:03 PM Today</span>
        </span>{/* /.username */}
        It is a long established fact that a reader will be distracted
        by the readable content of a page when looking at its layout.
      </div>
      {/* /.comment-text */}
    </div>
    {/* /.card-comment */}
  </div>
  {/* /.card-footer */}
  <div className="card-footer" style={{display: 'none'}}>
    <form action="#" method="post">
      <img className="img-fluid img-circle img-sm" src="../dist/img/user4-128x128.jpg" alt="Alt Text" />
      {/* .img-push is used to add margin to elements next to floating images */}
      <div className="img-push">
        <input type="text" className="form-control form-control-sm" placeholder="Press enter to post comment" />
      </div>
    </form>
  </div>
  {/* /.card-footer */}
</div>

        </div>
    )
}
