import React from 'react'
import Link from 'next/link'

const names = ['James', 'Paul', 'John', 'George', 'Ringo'];

export default function list() {
    
    return (
        <div className="row">
 {names.map(name => (
<div className="col-4">
            <div className="card card-widget">
  <div className="card-header">
    <div className="user-block">
      <img className="img-circle" src="/admin-lte/dist/img/user1-128x128.jpg" alt="User Image" />
      <span className="username"><a href="#">Jonathan Burke Jr.</a></span>
      <span className="description">Shared publicly - 7:30 PM Today</span>
    </div>
    {/* /.user-block */}
    <div className="card-tools">
      <button type="button" className="btn btn-tool" data-toggle="tooltip" title="Mark as read">
        <i className="far fa-circle" /></button>
      <button type="button" className="btn btn-tool" data-card-widget="collapse"><i className="fas fa-minus" />
      </button>
      <button type="button" className="btn btn-tool" data-card-widget="remove"><i className="fas fa-times" />
      </button>
    </div>
    {/* /.card-tools */}
  </div>
  {/* /.card-header */}
  <div className="card-body">
    <img className="img-fluid pad" src="/admin-lte/dist/img/photo2.png" alt="Photo" />
    <p>I took this photo this morning. What do you guys think?</p>
        <Link
        
          href={{
            pathname: '/meetings/create',
            query: { id: name },
          }}
        >
          <a className="btn btn-sm btn-primary">จอง</a>
        </Link>
{' '}

    <button type="button" className="btn btn-default btn-sm"><i className="far fa-thumbs-up" /> Like</button>
    <span className="float-right text-muted">127 likes - 3 comments</span>
  </div>
  {/* /.card-body */}
  <div className="card-footer card-comments">

    
 
</div>

        </div>
        </div>
            ))}
        </div>
    )
}
