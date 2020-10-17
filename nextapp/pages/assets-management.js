import React from 'react'
import Theme from "../layouts/bootstrap4/theme1";

export default function AssetsManagement() {
    return (
        <div>

<div className="alert alert-info" role="alert">
  <h4 className="alert-heading"><i class="fas fa-share-alt"></i> ประชาสัมพันธ์</h4>
  <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
  <hr />
  <p className="mb-0">โพสเมื่อ 17/10/2553</p>
</div>


<section className="content">
  <div className="container-fluid">
    <div className="row">
      <div className="col-md-3">
        <div className="sticky-top mb-3">
          <div className="card">
            <div className="card-header">
              <h4 className="card-title">Draggable Events</h4>
            </div>
            <div className="card-body">
              {/* the events */}
              <div id="external-events">
                <div className="external-event bg-success ui-draggable ui-draggable-handle" style={{position: 'relative'}}>Lunch</div>
                <div className="external-event bg-warning ui-draggable ui-draggable-handle" style={{position: 'relative'}}>Go home</div>
                <div className="external-event bg-info ui-draggable ui-draggable-handle" style={{position: 'relative'}}>Do homework</div>
                <div className="external-event bg-primary ui-draggable ui-draggable-handle" style={{position: 'relative'}}>Work on UI design</div>
                <div className="external-event bg-danger ui-draggable ui-draggable-handle" style={{position: 'relative'}}>Sleep tight</div>
                <div className="checkbox">
                  <label htmlFor="drop-remove">
                    <input type="checkbox" id="drop-remove" />
                    remove after drop
                  </label>
                </div>
              </div>
            </div>
            {/* /.card-body */}
          </div>
          {/* /.card */}
          <div className="card">
            <div className="card-header">
              <h3 className="card-title">Create Event</h3>
            </div>
            <div className="card-body">
              <div className="btn-group" style={{width: '100%', marginBottom: 10}}>
                {/*<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>*/}
                <ul className="fc-color-picker" id="color-chooser">
                  <li><a className="text-primary" href="#"><i className="fas fa-square" /></a></li>
                  <li><a className="text-warning" href="#"><i className="fas fa-square" /></a></li>
                  <li><a className="text-success" href="#"><i className="fas fa-square" /></a></li>
                  <li><a className="text-danger" href="#"><i className="fas fa-square" /></a></li>
                  <li><a className="text-muted" href="#"><i className="fas fa-square" /></a></li>
                </ul>
              </div>
              {/* /btn-group */}
              <div className="input-group">
                <input id="new-event" type="text" className="form-control" placeholder="Event Title" />
                <div className="input-group-append">
                  <button id="add-new-event" type="button" className="btn btn-primary">Add</button>
                </div>
                {/* /btn-group */}
              </div>
              {/* /input-group */}
            </div>
          </div>
        </div>
      </div>
      {/* /.col */}
      <div className="col-md-9">
        <div className="card card-primary">
          <div className="card-body p-0">
            {/* THE CALENDAR */}
            <div id="calendar" className="fc fc-ltr fc-unthemed" style={{}}><div className="fc-toolbar fc-header-toolbar"><div className="fc-left"><div className="fc-button-group"><button type="button" className="fc-prev-button fc-button fc-button-primary" aria-label="prev"><span className="fc-icon fc-icon-chevron-left" /></button><button type="button" className="fc-next-button fc-button fc-button-primary" aria-label="next"><span className="fc-icon fc-icon-chevron-right" /></button></div><button type="button" className="fc-today-button fc-button fc-button-primary" disabled>today</button></div><div className="fc-center"><h2>October 2020</h2></div><div className="fc-right"><div className="fc-button-group"><button type="button" className="fc-dayGridMonth-button fc-button fc-button-primary fc-button-active">month</button><button type="button" className="fc-timeGridWeek-button fc-button fc-button-primary">week</button><button type="button" className="fc-timeGridDay-button fc-button fc-button-primary">day</button></div></div></div><div className="fc-view-container"><div className="fc-view fc-dayGridMonth-view fc-dayGrid-view" style={{}}><table className><thead className="fc-head"><tr><td className="fc-head-container fc-widget-header"><div className="fc-row fc-widget-header"><table className><thead><tr><th className="fc-day-header fc-widget-header fc-sun"><span>Sun</span></th><th className="fc-day-header fc-widget-header fc-mon"><span>Mon</span></th><th className="fc-day-header fc-widget-header fc-tue"><span>Tue</span></th><th className="fc-day-header fc-widget-header fc-wed"><span>Wed</span></th><th className="fc-day-header fc-widget-header fc-thu"><span>Thu</span></th><th className="fc-day-header fc-widget-header fc-fri"><span>Fri</span></th><th className="fc-day-header fc-widget-header fc-sat"><span>Sat</span></th></tr></thead></table></div></td></tr></thead><tbody className="fc-body"><tr><td className="fc-widget-content"><div className="fc-scroller fc-day-grid-container" style={{overflow: 'hidden', height: 779}}><div className="fc-day-grid"><div className="fc-row fc-week fc-widget-content" style={{height: 129}}><div className="fc-bg"><table className><tbody><tr><td className="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2020-09-27" /><td className="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2020-09-28" /><td className="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2020-09-29" /><td className="fc-day fc-widget-content fc-wed fc-other-month fc-past" data-date="2020-09-30" /><td className="fc-day fc-widget-content fc-thu fc-past" data-date="2020-10-01" /><td className="fc-day fc-widget-content fc-fri fc-past" data-date="2020-10-02" /><td className="fc-day fc-widget-content fc-sat fc-past" data-date="2020-10-03" /></tr></tbody></table></div><div className="fc-content-skeleton"><table><thead><tr><td className="fc-day-top fc-sun fc-other-month fc-past" data-date="2020-09-27"><span className="fc-day-number">27</span></td><td className="fc-day-top fc-mon fc-other-month fc-past" data-date="2020-09-28"><span className="fc-day-number">28</span></td><td className="fc-day-top fc-tue fc-other-month fc-past" data-date="2020-09-29"><span className="fc-day-number">29</span></td><td className="fc-day-top fc-wed fc-other-month fc-past" data-date="2020-09-30"><span className="fc-day-number">30</span></td><td className="fc-day-top fc-thu fc-past" data-date="2020-10-01"><span className="fc-day-number">1</span></td><td className="fc-day-top fc-fri fc-past" data-date="2020-10-02"><span className="fc-day-number">2</span></td><td className="fc-day-top fc-sat fc-past" data-date="2020-10-03"><span className="fc-day-number">3</span></td></tr></thead><tbody><tr><td /><td /><td /><td /><td className="fc-event-container"><a className="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style={{backgroundColor: '#f56954', borderColor: '#f56954'}}><div className="fc-content"><span className="fc-time">12a</span> <span className="fc-title">All Day Event</span></div></a></td><td /><td /></tr></tbody></table></div></div><div className="fc-row fc-week fc-widget-content" style={{height: 129}}><div className="fc-bg"><table className><tbody><tr><td className="fc-day fc-widget-content fc-sun fc-past" data-date="2020-10-04" /><td className="fc-day fc-widget-content fc-mon fc-past" data-date="2020-10-05" /><td className="fc-day fc-widget-content fc-tue fc-past" data-date="2020-10-06" /><td className="fc-day fc-widget-content fc-wed fc-past" data-date="2020-10-07" /><td className="fc-day fc-widget-content fc-thu fc-past" data-date="2020-10-08" /><td className="fc-day fc-widget-content fc-fri fc-past" data-date="2020-10-09" /><td className="fc-day fc-widget-content fc-sat fc-past" data-date="2020-10-10" /></tr></tbody></table></div><div className="fc-content-skeleton"><table><thead><tr><td className="fc-day-top fc-sun fc-past" data-date="2020-10-04"><span className="fc-day-number">4</span></td><td className="fc-day-top fc-mon fc-past" data-date="2020-10-05"><span className="fc-day-number">5</span></td><td className="fc-day-top fc-tue fc-past" data-date="2020-10-06"><span className="fc-day-number">6</span></td><td className="fc-day-top fc-wed fc-past" data-date="2020-10-07"><span className="fc-day-number">7</span></td><td className="fc-day-top fc-thu fc-past" data-date="2020-10-08"><span className="fc-day-number">8</span></td><td className="fc-day-top fc-fri fc-past" data-date="2020-10-09"><span className="fc-day-number">9</span></td><td className="fc-day-top fc-sat fc-past" data-date="2020-10-10"><span className="fc-day-number">10</span></td></tr></thead><tbody><tr><td /><td /><td /><td /><td /><td /><td /></tr></tbody></table></div></div><div className="fc-row fc-week fc-widget-content" style={{height: 129}}><div className="fc-bg"><table className><tbody><tr><td className="fc-day fc-widget-content fc-sun fc-past" data-date="2020-10-11" /><td className="fc-day fc-widget-content fc-mon fc-past" data-date="2020-10-12" /><td className="fc-day fc-widget-content fc-tue fc-past" data-date="2020-10-13" /><td className="fc-day fc-widget-content fc-wed fc-past" data-date="2020-10-14" /><td className="fc-day fc-widget-content fc-thu fc-past" data-date="2020-10-15" /><td className="fc-day fc-widget-content fc-fri fc-past" data-date="2020-10-16" /><td className="fc-day fc-widget-content fc-sat fc-today " data-date="2020-10-17" /></tr></tbody></table></div><div className="fc-content-skeleton"><table><thead><tr><td className="fc-day-top fc-sun fc-past" data-date="2020-10-11"><span className="fc-day-number">11</span></td><td className="fc-day-top fc-mon fc-past" data-date="2020-10-12"><span className="fc-day-number">12</span></td><td className="fc-day-top fc-tue fc-past" data-date="2020-10-13"><span className="fc-day-number">13</span></td><td className="fc-day-top fc-wed fc-past" data-date="2020-10-14"><span className="fc-day-number">14</span></td><td className="fc-day-top fc-thu fc-past" data-date="2020-10-15"><span className="fc-day-number">15</span></td><td className="fc-day-top fc-fri fc-past" data-date="2020-10-16"><span className="fc-day-number">16</span></td><td className="fc-day-top fc-sat fc-today " data-date="2020-10-17"><span className="fc-day-number">17</span></td></tr></thead><tbody><tr><td rowSpan={2} /><td className="fc-event-container" colSpan={3}><a className="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style={{backgroundColor: '#f39c12', borderColor: '#f39c12'}}><div className="fc-content"><span className="fc-time">12a</span> <span className="fc-title">Long Event</span></div></a></td><td rowSpan={2} /><td rowSpan={2} /><td className="fc-event-container"><a className="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style={{backgroundColor: '#0073b7', borderColor: '#0073b7'}}><div className="fc-content"><span className="fc-time">10:30a</span> <span className="fc-title">Meeting</span></div></a></td></tr><tr><td /><td /><td /><td className="fc-event-container"><a className="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style={{backgroundColor: '#00c0ef', borderColor: '#00c0ef'}}><div className="fc-content"><span className="fc-time">12p</span> <span className="fc-title">Lunch</span></div></a></td></tr></tbody></table></div></div><div className="fc-row fc-week fc-widget-content" style={{height: 129}}><div className="fc-bg"><table className><tbody><tr><td className="fc-day fc-widget-content fc-sun fc-future" data-date="2020-10-18" /><td className="fc-day fc-widget-content fc-mon fc-future" data-date="2020-10-19" /><td className="fc-day fc-widget-content fc-tue fc-future" data-date="2020-10-20" /><td className="fc-day fc-widget-content fc-wed fc-future" data-date="2020-10-21" /><td className="fc-day fc-widget-content fc-thu fc-future" data-date="2020-10-22" /><td className="fc-day fc-widget-content fc-fri fc-future" data-date="2020-10-23" /><td className="fc-day fc-widget-content fc-sat fc-future" data-date="2020-10-24" /></tr></tbody></table></div><div className="fc-content-skeleton"><table><thead><tr><td className="fc-day-top fc-sun fc-future" data-date="2020-10-18"><span className="fc-day-number">18</span></td><td className="fc-day-top fc-mon fc-future" data-date="2020-10-19"><span className="fc-day-number">19</span></td><td className="fc-day-top fc-tue fc-future" data-date="2020-10-20"><span className="fc-day-number">20</span></td><td className="fc-day-top fc-wed fc-future" data-date="2020-10-21"><span className="fc-day-number">21</span></td><td className="fc-day-top fc-thu fc-future" data-date="2020-10-22"><span className="fc-day-number">22</span></td><td className="fc-day-top fc-fri fc-future" data-date="2020-10-23"><span className="fc-day-number">23</span></td><td className="fc-day-top fc-sat fc-future" data-date="2020-10-24"><span className="fc-day-number">24</span></td></tr></thead><tbody><tr><td className="fc-event-container"><a className="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style={{backgroundColor: '#00a65a', borderColor: '#00a65a'}}><div className="fc-content"><span className="fc-time">7p</span> <span className="fc-title">Birthday Party</span></div></a></td><td /><td /><td /><td /><td /><td /></tr></tbody></table></div></div><div className="fc-row fc-week fc-widget-content" style={{height: 129}}><div className="fc-bg"><table className><tbody><tr><td className="fc-day fc-widget-content fc-sun fc-future" data-date="2020-10-25" /><td className="fc-day fc-widget-content fc-mon fc-future" data-date="2020-10-26" /><td className="fc-day fc-widget-content fc-tue fc-future" data-date="2020-10-27" /><td className="fc-day fc-widget-content fc-wed fc-future" data-date="2020-10-28" /><td className="fc-day fc-widget-content fc-thu fc-future" data-date="2020-10-29" /><td className="fc-day fc-widget-content fc-fri fc-future" data-date="2020-10-30" /><td className="fc-day fc-widget-content fc-sat fc-future" data-date="2020-10-31" /></tr></tbody></table></div><div className="fc-content-skeleton"><table><thead><tr><td className="fc-day-top fc-sun fc-future" data-date="2020-10-25"><span className="fc-day-number">25</span></td><td className="fc-day-top fc-mon fc-future" data-date="2020-10-26"><span className="fc-day-number">26</span></td><td className="fc-day-top fc-tue fc-future" data-date="2020-10-27"><span className="fc-day-number">27</span></td><td className="fc-day-top fc-wed fc-future" data-date="2020-10-28"><span className="fc-day-number">28</span></td><td className="fc-day-top fc-thu fc-future" data-date="2020-10-29"><span className="fc-day-number">29</span></td><td className="fc-day-top fc-fri fc-future" data-date="2020-10-30"><span className="fc-day-number">30</span></td><td className="fc-day-top fc-sat fc-future" data-date="2020-10-31"><span className="fc-day-number">31</span></td></tr></thead><tbody><tr><td /><td /><td /><td className="fc-event-container"><a className="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" href="http://google.com/" style={{backgroundColor: '#3c8dbc', borderColor: '#3c8dbc'}}><div className="fc-content"><span className="fc-time">12a</span> <span className="fc-title">Click for Google</span></div></a></td><td /><td /><td /></tr></tbody></table></div></div><div className="fc-row fc-week fc-widget-content" style={{height: 134}}><div className="fc-bg"><table className><tbody><tr><td className="fc-day fc-widget-content fc-sun fc-other-month fc-future" data-date="2020-11-01" /><td className="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2020-11-02" /><td className="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2020-11-03" /><td className="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2020-11-04" /><td className="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2020-11-05" /><td className="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2020-11-06" /><td className="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2020-11-07" /></tr></tbody></table></div><div className="fc-content-skeleton"><table><thead><tr><td className="fc-day-top fc-sun fc-other-month fc-future" data-date="2020-11-01"><span className="fc-day-number">1</span></td><td className="fc-day-top fc-mon fc-other-month fc-future" data-date="2020-11-02"><span className="fc-day-number">2</span></td><td className="fc-day-top fc-tue fc-other-month fc-future" data-date="2020-11-03"><span className="fc-day-number">3</span></td><td className="fc-day-top fc-wed fc-other-month fc-future" data-date="2020-11-04"><span className="fc-day-number">4</span></td><td className="fc-day-top fc-thu fc-other-month fc-future" data-date="2020-11-05"><span className="fc-day-number">5</span></td><td className="fc-day-top fc-fri fc-other-month fc-future" data-date="2020-11-06"><span className="fc-day-number">6</span></td><td className="fc-day-top fc-sat fc-other-month fc-future" data-date="2020-11-07"><span className="fc-day-number">7</span></td></tr></thead><tbody><tr><td /><td /><td /><td /><td /><td /><td /></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div>
          </div>
          {/* /.card-body */}
        </div>
        {/* /.card */}
      </div>
      {/* /.col */}
    </div>
    {/* /.row */}
  </div>{/* /.container-fluid */}
</section>



        </div>
    )
}
AssetsManagement.Layout = Theme;