import React from 'react';
class Header extends React.Component {
    render() {
        return (
            <header>
               

                    <div className="tmpl_hh_wrapper">
                 
                    <div className="tmpl_hh_header">
                        <div className="tmpl_hh_header__logo"><img src="../image/logo.svg" alt=""></img></div>
                    </div>
                    <div className="tmpl_hh_slider">
                        <div className="swiper-container">
                            <div className="swiper-wrapper">
                                <div className="swiper-slide">
                                    <img src="../image/1.jpg" alt=""></img>
                                </div>
                                <div className="swiper-slide">
                                    <img src="../image/2.jpg" alt=""></img>
                                </div>
                                <div className="swiper-slide">
                                    <img src="..//image/4.jpg" alt=""></img>
                                </div>
                                <div className="swiper-slide">
                                    <img src="../image/3.jpg" alt=""></img>
                                </div>
                            </div>
                        </div>
                        <div className="swiper-button swiper-button-prev"></div>
                        <div className="swiper-button swiper-button-next"></div>
                    </div>
                </div>
            </header>
        )
    }
}

export default Header;