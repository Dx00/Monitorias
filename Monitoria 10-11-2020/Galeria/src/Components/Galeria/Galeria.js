import React from 'react';

class Galeria extends React.Component {
    render() {
        return (
            <div className="col-lg-9 col-md-9 col-sm-12 col-12">
                <div className="galeria">
                    <img className="mb-3 col-lg-3 col-mg-4 col-sm-5 col-6 float-left" src="https://picsum.photos/id/0/150/150" alt="" />
                    <img className="mb-3 col-lg-3 col-mg-4 col-sm-5 col-6 float-left" src="https://picsum.photos/id/1/150/150" alt="" />
                    <img className="mb-3 col-lg-3 col-mg-4 col-sm-5 col-6 float-left" src="https://picsum.photos/id/2/150/150" alt="" />
                    <img className="mb-3 col-lg-3 col-mg-4 col-sm-5 col-6 float-left" src="https://picsum.photos/id/3/150/150" alt="" />
                    <img className="mb-3 col-lg-3 col-mg-4 col-sm-5 col-6 float-left" src="https://picsum.photos/id/4/150/150" alt="" />
                    <img className="mb-3 col-lg-3 col-mg-4 col-sm-5 col-6 float-left" src="https://picsum.photos/id/5/150/150" alt="" />
                </div>
            </div>
        )
    }
}

export default Galeria;