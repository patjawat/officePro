import React from 'react'
import * as rdd from 'react-device-detect';

function Home() {
    return (
        <div>
          <h5>
            Device : 
            {JSON.stringify(rdd, null, 5)}
          </h5>
         

        </div>
    )
}

export default Home
